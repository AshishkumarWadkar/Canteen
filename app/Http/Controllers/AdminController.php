<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function get_all_transction()
    {
        return $tran = User::join('topup','users.id','topup.user_id')
        ->join('messes','messes.id','users.created_by')
        ->get(['users.name as name','messes.name as mess','users.email','amount','order_id','rzp_paymentid','payment_status']);

    }

    public function get_all_users()
    {
        return User::select('users.*','messes.name as mess')->join('messes','messes.id','users.created_by')->get();

    }
}
