<?php

namespace App\Http\Controllers;

use App\Models\PhonePe;
use App\Models\TopupMaster;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PhonePeController extends Controller
{
    //
    public function initiate(Request $request)
    {
        $plan =  \DB::table('topup_master')->select('id','amount', 'name')->where('id', '=',$request->plan)->first();

        $salt="099eb0cd-02cf-4e2a-8aca-3e6c6aff0399";
        $index=1;

        $instrument = new \stdClass();
        $instrument->type = "PAY_PAGE";

        $request_body = new \stdClass();
        $request_body->merchantId = "PGTESTPAYUAT";
        $request_body->merchantTransactionId = \Str::random(18);
        $request_body->merchantUserId = "MUID".\Str::random(5);
        $request_body->amount = $plan->amount * 100;
        $request_body->redirectUrl = "http://127.0.0.1:8000/payment_sucess";
        $request_body->redirectMode = "get";
        $request_body->callbackUrl = "http://127.0.0.1:8000/payment_sucess";
        $request_body->mobileNumber = "9999999999";
        $request_body->paymentInstrument = $instrument;
        $base64 = base64_encode(json_encode($request_body));
        $sha256 = hash('sha256',$base64."/pg/v1/pay".$salt).'###'.$index;
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/pay', [
          'body' => '{"request":"'.$base64.'"}',
          'headers' => [
            'Content-Type' => 'application/json',
            'X-VERIFY' => $sha256,
            'accept' => 'application/json',
          ],
        ]);
       $res = json_decode($response->getBody());
        \DB::table('phonepe')->insert([
            'user_id' => \Auth::id(),
            'transactionId' => $res->data->transactionId,
            'merchantTransactionId' => $res->data->merchantTransactionId,
            'plan' => $request->plan,

        ]);
       $url = $res->data->instrumentResponse->redirectInfo->url;

        return view('phonepe.payment',compact("url"));

    }

    public function payment_sucess(Request $request)
    {

        if($request->code =="PAYMENT_SUCCESS")
        {
             $phonepe = PhonePe::where('transactionId',$request->providerReferenceId)->where('merchantTransactionId',$request->transactionId)->first();
             $phonepe->amount = $request->amount / 100;
             $phonepe->providerReferenceId = $request->providerReferenceId;
             $phonepe->code = $request->code;
             $phonepe->checksum = $request->checksum;
             $phonepe->save();
             $user = User::find($phonepe->user_id);

             if($phonepe->plan == 1)
             {
                 $user->is_subscribed = 1;
                 $user->expiry_date = Carbon::now()->addDays(365);
             }
             else{

                 $user->points =   $user->points + $request->amount / 100;
             }
             $user->save();
             sweetalert("Payment Done Successfully");
        }
        else
        {
            sweetalert("Payment Done Successfully")->addError();
        }

        return redirect('/home');

    }

    function plan(Request $request)
    {
        $plans = TopupMaster::all();
        return view('razorpay.razorpayView',compact('plans'));
    }
}
