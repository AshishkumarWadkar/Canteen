<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Phonepe;
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

    public function get_all_subscription(Request $request)
    {


        $tran = User::join('phonepe','users.id','phonepe.user_id')
        // ->where('created_by',\Auth::id())
        ->where('plan','=',1)
        ;

        if(isset($request->from) && isset($request->to))
        {
                $tran = $tran->whereDate('phonepe.created_at', '>=', $request->from);
                $tran = $tran->whereDate('phonepe.created_at', '<=', $request->to);
        }
        if(isset($request->created_by))
        {
                $tran = $tran->where('created_by', $request->created_by);

        }
        $tran = $tran->get(['name','email','amount','providerReferenceId','code','phonepe.created_at']);
        $sum = $tran->where('code','PAYMENT_SUCCESS')->sum("amount");

        return view('admin.subscritipn_lis',compact('tran','sum'));

    }
}
