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

        //dev
        $salt="099eb0cd-02cf-4e2a-8aca-3e6c6aff0399";
        $merchant_id = "PGTESTPAYUAT";
        $index=1;
        $url = "https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/pay";


        //live
        // $salt="021d2301-661d-4d5a-97c4-1c298ad19f66";
        // $merchant_id = "TAVAONLINE";
        // $index=1;
        // $url = "https://api.phonepe.com/apis/hermes/pg/v1/pay";


        $plan =  \DB::table('topup_master')->select('id','amount', 'name')->where('id', '=',$request->plan)->first();


        $instrument = new \stdClass();
        $instrument->type = "PAY_PAGE";

        $request_body = new \stdClass();
        $request_body->merchantId = $merchant_id;
        $request_body->merchantTransactionId = \Str::random(18);
        $request_body->merchantUserId = "MUID".\Str::random(5);
        $request_body->amount = $plan->amount * 100;
        $request_body->redirectUrl = env("APP_URL")."payment_sucess";
        $request_body->redirectMode = "POST";
        $request_body->callbackUrl = env("APP_URL")."payment_sucess";
        $request_body->mobileNumber = "9130348229";
        $request_body->paymentInstrument = $instrument;
        // return json_encode($request_body);
        $base64 = base64_encode(json_encode($request_body));
        $sha256 = hash('sha256',$base64."/pg/v1/pay".$salt).'###'.$index;
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', $url, [
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
            'transactionId' => $res->data->transactionId ?? null,
            'merchantTransactionId' => $res->data->merchantTransactionId,
            'plan' => $request->plan,
            'created_at' => Carbon::now(),


        ]);
          $url = $res->data->instrumentResponse->redirectInfo->url;

    //    return redirect()->away($url);


        return redirect()->away(($url));
        return view('phonepe.payment',compact("url"));

    }

    public function payment_sucess(Request $request)
    {


        if($request->code =="PAYMENT_SUCCESS")
        {
             $phonepe = PhonePe::where('merchantTransactionId',$request->transactionId)->first();
             $phonepe->amount = $request->amount / 100;
             $phonepe->providerReferenceId = $request->providerReferenceId;
             $phonepe->code = $request->code;
             $phonepe->checksum = $request->checksum;

             $phonepe->percent = env('PHONEPE_CHARGE');
             $phonepe->tax = env("TAX");
             $phonepe->total_deduction = (($request->amount / 100) * (env('PHONEPE_CHARGE') / 100 )) * env("TAX");
             $phonepe->actual_amount = ($request->amount / 100) -  (($request->amount / 100) * (env('PHONEPE_CHARGE') / 100 )) * env("TAX");

             $phonepe->payment_type = isset($request->data->paymentInstrument->type) && $request->data->paymentInstrument->type? $request->data->paymentInstrument->type : "";
             $phonepe->cardType = isset($request->data->paymentInstrument->cardType) && $request->data->paymentInstrument->cardType? $request->data->paymentInstrument->cardType : "";

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
            $phonepe = PhonePe::where('merchantTransactionId',$request->transactionId)->first();
            $phonepe->amount = $request->amount / 100;
            $phonepe->providerReferenceId = $request->providerReferenceId;
            $phonepe->code = $request->code;
            $phonepe->save();

            sweetalert()->addError("Payment Failed ");
        }

        return redirect('/home');

    }

    function plan(Request $request)
    {
        $plans = TopupMaster::all()->where('is_subscription_plan',0);
        return view('razorpay.razorpayView',compact('plans'));
    }
    function check_status()
    {

        $salt="099eb0cd-02cf-4e2a-8aca-3e6c6aff0399";
        $merchant_id = "PGTESTPAYUAT";
        $index=1;
        $url = "https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/status";
        $transaction_id = "sqXa4iXueOk4RZGZ0M";

        $sha256 = hash('sha256',"/pg/v1/status/".$merchant_id.'/'.$transaction_id.$salt).'###'.$index;
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET','https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/status/'.$merchant_id.'/'.$transaction_id, [
        'headers' => [
            'Content-Type' => 'application/json',
            'X-MERCHANT-ID' => "$merchant_id",
            'X-VERIFY' => "$sha256",
            'accept' => 'application/json',
        ],
        ]);

        return $response->getBody();
    }
}
