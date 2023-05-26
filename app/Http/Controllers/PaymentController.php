<?php

namespace App\Http\Controllers;

use App\Models\Topup;
use App\Models\TopupMaster;
use App\Models\User;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Exception;
use DB;
use Carbon\Carbon;
class PaymentController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */

    private $razorpayId = "rzp_test_KIBojQNsTwouoV";
    private $razorpayKey = "M9UabS1LUJJTJeIUmvOmQc2K";


    public function initiate(Request $request)
    {
        // return $request->all();
         $plan =  DB::table('topup_master')->select('id','amount', 'name')->where('id', '=',$request->plan)->first();

        // Generate random receipt id
        $receiptId = \Str::random(20);
        $api = new Api($this->razorpayId, $this->razorpayKey);

        // In razorpay you have to convert rupees into paise we multiply by 100
        // Currency will be INR
        // Creating order
        $order = $api->order->create(
            array(

                'receipt' => $receiptId,
                'amount' => $plan->amount * 100,
                'currency' => 'INR'
            )
        );

        function generateOrderId()
        {
            $number = mt_rand(10000, 99999); // better than rand()

            // call the same function if the barcode exists already
            if (OrderIdExists($number)) {
                return generateOrderId();
            }

            // otherwise, it's valid and can be used
            return $number;
        }

        function OrderIdExists($number)
        {
            // query the database and return a boolean
            // for instance, it might look like this in Laravel
            return  DB::table('topup')
                ->select('order_id')
                ->where('order_id', '=', $number)->exists();
        }
        $unique_topup = generateOrderId();

        $topup = new Topup;
        $topup->user_id = \Auth::id();
        $topup->topup_id =$plan->id;
        $topup->order_id = $unique_topup;
        $topup->razorpay_orderid = $order['id'];
        $topup->save();

        $response = [
            'orderId' => $order['id'],
            'razorpayId' => $this->razorpayId,
            'amount' => $plan->amount * 100,
            'name' => "E-Canteen ".$plan->name,
            'currency' => 'INR',
            'email' => "",
            'plan'=> $plan->id,
            'contactNumber' =>"8007850037",
            // 'address' => $request->all()['address'],
            'description' => $plan->name,

        ];
        // dd($response);


        // Let's checkout payment page is it working
        return view('razorpay.payment-page', compact('response'));

    }
     public function index()
    {
        $plans = TopupMaster::all()->where('is_subscription_plan',0);
        return view('razorpay.razorpayView',compact('plans'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function complete(Request $request)
    {

        $signatureStatus = $this->SignatureVerify(
            $request->all()['rzp_signature'],
            $request->all()['rzp_paymentid'],
            $request->all()['rzp_orderid']
        );
        if ($signatureStatus == true) {
            // return $signatureStatus;

            $paymentId = $request->all()['rzp_paymentid'];
            $api = new Api($this->razorpayId, $this->razorpayKey);
            $payment = $api->payment->fetch($paymentId);
            $topup = Topup::where('razorpay_orderid', $request->all()['rzp_orderid'])->first();
            echo $payment['status'];
            if(isset($payment['status']) && $payment['status'] == 'captured'){

                $topup->rzp_paymentid = $payment['id'];
                $topup->amount = $payment['amount']/100;
                $topup->order_completed = 1;
                $topup->payment_status = $payment['status'];
                $topup->save();
                $user = User::find(\Auth::id());
                if($request->plan == 1)
                {
                    $user->is_subscribed = 1;
                    $user->expiry_date = Carbon::now()->addDays(365);
                }
                else{

                    $user->points =   $user->points + $payment['amount']/100;
                }
                $user->save();
                return redirect('/home');

            }
            else{
                $topup->amount = $payment['amount']*100;
                $topup->rzp_paymentid = $payment['id'];
                $topup->order_completed = 0;
                $topup->payment_status = $payment['status'];
                $topup->save();
                return redirect('/home');

            }
        }


    }
    private function SignatureVerify($_signature, $_paymentId, $_orderId)
    {
        try {
            // Create an object of razorpay class
            $api = new Api($this->razorpayId, $this->razorpayKey);
            $attributes  = array('razorpay_signature'  => $_signature,  'razorpay_payment_id'  => $_paymentId,  'razorpay_order_id' => $_orderId);
            $order  = $api->utility->verifyPaymentSignature($attributes);

            return true;
        } catch (\Exception $e) {
            // If Signature is not correct its give a excetption so we use try catch
            return false;
        }
    }
}
