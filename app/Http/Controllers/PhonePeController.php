<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpseclib\Crypt\Hash;


class PhonePeController extends Controller
{
    //
    public function initiate(Request $request)
    {
        $salt="099eb0cd-02cf-4e2a-8aca-3e6c6aff0399";

        $instrument = new \stdClass();
        $instrument->type = "PAY_PAGE";

        $request_body = new \stdClass();
        $request_body->merchantId = "PGTESTPAYUAT";
        $request_body->merchantTransactionId = \Str::random(18);
        $request_body->merchantUserId = "MUID".\Str::random(5);
        $request_body->amount = 10000;
        $request_body->redirectUrl = "http://webhook.site/redirect-url";
        $request_body->redirectMode = "POST";
        $request_body->callbackUrl = "https://webhook.site/callback-url";
        $request_body->mobileNumber = "9999999999";
        $request_body->paymentInstrument = $instrument;
        $base64 = base64_encode(json_encode($request_body));
        $sha256 = hash('sha256',$base64."/pg/v1/pay".$salt).'###1';

        // echo "<br><br>";
        // return $sha256;


        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/pay', [
          'body' => '{"request":"'.$base64.'"}',
          'headers' => [
            'Content-Type' => 'application/json',
            'X-VERIFY' => $sha256,
            'accept' => 'application/json',
          ],
        ]);
        return $response->getBody();

    }
}
