<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //SELECT SUM(topup.amount) FROM `users` INNER join topup on users.id = topup.user_id where created_by = 2 and topup.order_completed = 1 and topup.topup_id != 1;

        //  $tran = User::join('topup','users.id','topup.user_id')->where('created_by',\Auth::id())->where('topup_id','!=',1)->get(['name','email','amount','order_id','rzp_paymentid','payment_status']);
         $tran = User::join('phonepe','users.id','phonepe.user_id')->where('created_by',\Auth::id())->where('plan','!=',1)->get(['name','email','amount','transactionId','code','phonepe.created_at']);
       return view('transactions.index',compact('tran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
