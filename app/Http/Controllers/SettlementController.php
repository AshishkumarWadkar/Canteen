<?php

namespace App\Http\Controllers;

use App\Models\Settlement;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class SettlementController extends Controller
{
    //
    public function index(Request $request)
    {
        $from_date = $request->from ?? null;
        $to_date = $request->to ?? null;
        $tran = User::join('phonepe','users.id','phonepe.user_id')->where('created_by',\Auth::id())->where('plan','!=',1)->where('phonepe.code','PAYMENT_SUCCESS')
        ;
        $amount=0;
        $payable=0;

        if(isset($request->from) && isset($request->to))
        {
            $tran = $tran->whereDate('phonepe.created_at', '>=', $request->from);
            $tran = $tran->whereDate('phonepe.created_at', '<=', $request->to);
            $amount = $tran->where('code','PAYMENT_SUCCESS')->sum("amount");
            $payable = $tran->where('code','PAYMENT_SUCCESS')->sum("actual_amount");
        }
        $stlmnt = Settlement::all()->where('mess_id',\Auth::id());
        return view("settlement.index",compact('stlmnt','amount','payable','from_date','to_date'));
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
        return redirect()->route("messsettlement.index");
    }
    public function pay(Request $request,$id)
    {
        $set = Settlement::find($id);
        $set->status = 2;
        $set->paid_at = date('Y-m-d H:i:s');
        $set->save();

        sweetalert("Amount Paid");
        return redirect()->route("settlement.index");
    }
}
