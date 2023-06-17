<?php

namespace App\Http\Controllers;

use App\Models\PhonePe;
use App\Models\TopupMaster;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;



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


        // live
        // $salt = "021d2301-661d-4d5a-97c4-1c298ad19f66";
        // $merchant_id = "TAVAONLINE";
        // $index = 1;
        // $url = "https://api.phonepe.com/apis/hermes/pg/v1/pay";


        $plan = \DB::table('topup_master')->select('id', 'amount', 'name')->where('id', '=', $request->plan)->first();


        $instrument = new \stdClass();
        $instrument->type = "PAY_PAGE";

        $request_body = new \stdClass();
        $request_body->merchantId = $merchant_id;
        $request_body->merchantTransactionId = \Str::random(18);
        $request_body->merchantUserId = "MUID" . \Str::random(5);
        $request_body->amount = $plan->amount * 100;
        $request_body->redirectUrl = env("APP_URL") . "payment_sucess";
        $request_body->redirectMode = "POST";
        $request_body->callbackUrl = env("APP_URL") . "payment_sucess";
        $request_body->mobileNumber = "9130348229";
        $request_body->paymentInstrument = $instrument;
        // return json_encode($request_body);
        $base64 = base64_encode(json_encode($request_body));
        $sha256 = hash('sha256', $base64 . "/pg/v1/pay" . $salt) . '###' . $index;
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', $url, [
            'body' => '{"request":"' . $base64 . '"}',
            'headers' => [
                'Content-Type' => 'application/json',
                'X-VERIFY' => $sha256,
                'accept' => 'application/json',
            ],
        ]);
        $res = json_decode($response->getBody());
        $phonepe = new PhonePe;
        $phonepe->user_id = \Auth::id();
        $phonepe->transactionId = $res->data->transactionId ?? null;
        $phonepe->merchantTransactionId = $res->data->merchantTransactionId;
        $phonepe->plan = $request->plan;
        $phonepe->created_at = Carbon::now();
        $is_saved = $phonepe->save();

        $url = $res->data->instrumentResponse->redirectInfo->url;
        if ($is_saved) {
            return redirect()->away(($url));

        }

        //    return redirect()->away($url);

        sweetalert()->addError("Opps Something Went Wrong");
        return redirect()->back();
        // return view('phonepe.payment',compact("url"));

    }

    public function payment_sucess(Request $request)
    {


        if ($request->code == "PAYMENT_SUCCESS") {
            $flag = PhonePe::where('merchantTransactionId', $request->transactionId)->where('code', 'PAYMENT_SUCCESS')->doesntExist();
            if ($flag) {
                $phonepe = PhonePe::where('merchantTransactionId', $request->transactionId)->first();
                $phonepe->amount = $request->amount / 100;
                $phonepe->providerReferenceId = $request->providerReferenceId;
                $phonepe->code = $request->code;
                $phonepe->checksum = $request->checksum;

                $phonepe->percent = env('PHONEPE_CHARGE');
                $phonepe->tax = env("TAX");
                $phonepe->total_deduction = (($request->amount / 100) * (env('PHONEPE_CHARGE') / 100)) * env("TAX");
                $phonepe->actual_amount = ($request->amount / 100) - (($request->amount / 100) * (env('PHONEPE_CHARGE') / 100)) * env("TAX");

                $phonepe->payment_type = isset($request->data->paymentInstrument->type) && $request->data->paymentInstrument->type ? $request->data->paymentInstrument->type : "";
                $phonepe->cardType = isset($request->data->paymentInstrument->cardType) && $request->data->paymentInstrument->cardType ? $request->data->paymentInstrument->cardType : "";

                $phonepe->save();
                $user = User::find($phonepe->user_id);



                if ($phonepe->plan == 1) {
                    $user->is_subscribed = 1;
                    $user->expiry_date = Carbon::now()->addDays(365);
                } else {

                    $user->points = $user->points + $request->amount / 100;
                }
                $user->save();
                sweetalert("Payment Done Successfully");

                \Auth::login($user);
                return redirect()->route("home");
                // return redirect('/home');


            }
        } else {
            $phonepe = PhonePe::where('merchantTransactionId', $request->transactionId)->first();
            $phonepe->amount = $request->amount / 100;
            $phonepe->providerReferenceId = $request->providerReferenceId;
            $phonepe->code = $request->code;
            $phonepe->save();

            sweetalert()->addError("Payment Failed ");
            $user = User::find($phonepe->user_id);
            \Auth::login($user);
            return redirect()->route("home");
        }

        return redirect('/home');

    }

    function plan(Request $request)
    {
        $plans = TopupMaster::all()->where('is_subscription_plan', 0);
        return view('razorpay.razorpayView', compact('plans'));
    }
    function check_status()
    {

        //dev
        $salt="099eb0cd-02cf-4e2a-8aca-3e6c6aff0399";
        $merchant_id = "PGTESTPAYUAT";
        $index=1;
        $url = "https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/pay";


        // live
        // $salt = "021d2301-661d-4d5a-97c4-1c298ad19f66";
        // $merchant_id = "TAVAONLINE";
        // $index = 1;
        // $url = "https://api.phonepe.com/apis/hermes/pg/v1/status/";





         $records = PhonePe::
            where("code", "=", "PAYMENT_INITIATED")->
            orWhere("code", "=", "PAYMENT_PENDING")->
            get();


        foreach ($records as $key => $record)
        {
            $transaction_id = $record->merchantTransactionId;
            $sha256 = hash('sha256', "/pg/v1/status/" . $merchant_id . '/' . $transaction_id . $salt) . '###' . $index;
            $client = new \GuzzleHttp\Client();

            $response = $client->request('GET', $url . $merchant_id . '/' . $transaction_id, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'X-MERCHANT-ID' => "$merchant_id",
                    'X-VERIFY' => "$sha256",
                    'accept' => 'application/json',
                ],
            ]);

            // $request = ($response->getBody());
             $request = json_decode($response->getBody());

            if ($request->code == "PAYMENT_SUCCESS")
            {
                $flag = PhonePe::where('merchantTransactionId', $request->data->merchantTransactionId)->where('code', 'PAYMENT_SUCCESS')->doesntExist();
                if ($flag) {
                    $phonepe = PhonePe::where('merchantTransactionId', $request->data->merchantTransactionId)->first();
                    $phonepe->amount = $request->data->amount / 100;
                    $phonepe->providerReferenceId = $request->data->transactionId;
                    $phonepe->code = $request->code;
                    $phonepe->checksum = $request->checksum??"";

                    $phonepe->percent = env('PHONEPE_CHARGE');
                    $phonepe->tax = env("TAX");
                    $phonepe->total_deduction = (($request->data->amount / 100) * (env('PHONEPE_CHARGE') / 100)) * env("TAX");
                    $phonepe->actual_amount = ($request->data->amount / 100) - (($request->data->amount / 100) * (env('PHONEPE_CHARGE') / 100)) * env("TAX");

                    $phonepe->payment_type = isset($request->data->paymentInstrument->type)  ? $request->data->paymentInstrument->type : "";
                    $phonepe->cardType = isset($request->data->paymentInstrument->cardType)  ? $request->data->paymentInstrument->cardType : "";

                    $phonepe->save();
                    $user = User::find($phonepe->user_id);

                    if ($phonepe->plan == 1) {
                        $user->is_subscribed = 1;
                        $user->expiry_date = Carbon::now()->addDays(365);
                    } else {

                        $user->points = $user->points + $request->data->amount / 100;
                    }
                    $user->save();
                    // sweetalert("Payment Done Successfully");
                    // \Auth::login($user);
                    // return redirect()->route("home");
                    // return redirect('/home');


                }
            }
            else
            {
                $phonepe = PhonePe::where('merchantTransactionId', $request->data->merchantTransactionId)->first();
                $phonepe->amount = $request->data->amount / 100;
                $phonepe->providerReferenceId = $request->providerReferenceId??"";
                $phonepe->code = $request->code;
                $phonepe->save();

                // sweetalert()->addError("Payment Failed ");
                // $user = User::find($phonepe->user_id);
                // \Auth::login($user);
                // return redirect()->route("home");
            }
        }

        Log::info("Cron Job Of Phone pe Executed".Carbon::now());

    }
}
