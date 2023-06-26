<?php

namespace App\Http\Controllers;

use App\Models\Settlement;
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
        if(isset($request->mess_id))
        {
                $tran = $tran->where('created_by', $request->mess_id);

        }
        $tran = $tran->get(['name','email','amount','providerReferenceId','code','phonepe.created_at']);
        $sum = $tran->where('code','PAYMENT_SUCCESS')->sum("amount");

        $from = $request->from ??"";
        $to =$request->to ?? "";
        $branch = $request->mess_id??"";
        return view('admin.subscritipn_lis',compact('tran','sum','from','to','branch'));

    }
    public function adminsettlement(Request $request)
    {
        $from_date = $request->from ?? null;
        $to_date = $request->to ?? null;
        $tran = User::join('phonepe','users.id','phonepe.user_id')->where('plan','!=',1)->where('phonepe.code','PAYMENT_SUCCESS');
        $amount=0;
        $payable=0;

        if(isset($request->from) && isset($request->to))
        {
            $tran = $tran->whereDate('phonepe.created_at', '>=', $request->from);
            $tran = $tran->whereDate('phonepe.created_at', '<=', $request->to);
        }
        if(isset($request->mess_id))
        {
                $tran = $tran->where('created_by', $request->mess_id);

        }

        $amount = $tran->where('code','PAYMENT_SUCCESS')->sum("amount");
        $payable = $tran->where('code','PAYMENT_SUCCESS')->sum("actual_amount");
        $stlmnt = new Settlement;

        if(isset($request->mess_id) && $request->mess_id != 0)
        {
                $stlmnt = $stlmnt->where('mess_id', $request->mess_id);

        }
        $stlmnt =  $stlmnt->get();
        $branch = $request->mess_id ?? "";
        return view("admin.adminsettlement",compact('stlmnt','amount','payable','from_date','to_date','branch'));
    }

    public function requested(Request $request)
    {
        $set = new Settlement;
        $set->mess_id = \Auth::id();
        $set->from_date = $request->from;
        $set->to_date = $request->to;
        $set->total_amount = $request->amount;
        $set->payable_amount = $request->payable;
        $set->status = 1;
        $set->requested_at = date('Y-m-d H:i:s');
        $set->comment = $request->comment;
        $set->save();

        sweetalert("Amount Requested");
        return redirect()->route("adminsettlement.index");
    }
    public function pay(Request $request,$id)
    {
        $set = Settlement::find($id);
        $set->status = 2;
        $set->paid_at = date('Y-m-d H:i:s');
        $set->save();

        sweetalert("Amount Paid");
        return redirect()->route("adminsettlement.index");
    }
}
