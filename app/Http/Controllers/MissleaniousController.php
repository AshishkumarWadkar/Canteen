<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Missleanious;

class MissleaniousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $missleanious       = Missleanious::where('mess_id',\Auth::id())->get();
        $missleanious_paid_sum   = $missleanious->where('paid_status',1)->sum("amount");
        $missleanious_unpaid_sum   = $missleanious->where('paid_status',0)->sum("amount");

        return view('missleanious.index', compact('missleanious','missleanious_paid_sum','missleanious_unpaid_sum'));
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
        $missleanious               = new Missleanious;
        $missleanious->name         = $request->name;
        $missleanious->description  = $request->description;
        $missleanious->paid_status  = $request->paid_status;
        $missleanious->amount       = $request->amount;
        $missleanious->mess_id      = \Auth::id();;

        $missleanious->save();
        toastr()
    ->positionClass('toast-top-center')
    ->addSuccess('Missleanious saved');
    return redirect()->back();

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

    public function misslenious_status_update($id) {

        $missleanious               =  Missleanious::findorfail($id);
        $missleanious->paid_status  = 1;
        $missleanious->save();
        toastr()
    ->positionClass('toast-top-center')
    ->addSuccess('Payment Recived Succefully');
    return redirect()->back();
    }
}
