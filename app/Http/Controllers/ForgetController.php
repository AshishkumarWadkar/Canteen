<?php

namespace App\Http\Controllers;

use App\Models\OTP;
use App\Models\User;
use Illuminate\Http\Request;

class ForgetController extends Controller
{
    //
    public function forget_password()
    {
        return view("forget");
    }
    public function sendotp(Request $request)
    {
        if(User::where("email",$request->phone)->exists())
        {
            $otp = rand(111111,999999);

            OTP::create([
                "phone" => $request->phone,
                "otp" => $otp
            ]);

            $user = User::where("email",$request->phone)->first();
            $user->password = \Hash::make($otp);
            $user->save();
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://www.fast2sms.com/dev/bulkV2?authorization=Zt6WfbaYPApCVylwmzX0QTUjBeE41L53xgnOKh8ckJ7iGuDvr2JzlABp52DacG7MfoZ6smUv0NtqduES&route=dlt&sender_id=ECANTN&message=156002&variables_values='.$otp.'%7C&flash=0&numbers='.$request->phone);

        }
        else{
            // sweetalert()->addError("User Not Exists");
        }

    }
    public function verifyotp(Request $request)
    {
        // return $request->all();
        return \Hash::make('9130348229');

    }
}
