<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            $expenses = Expenses::get()->where('mess_id',\Auth::id());

            return view('expenses.index',compact('expenses'));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
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
        $expenses               = new Expenses;
        $expenses->mess_id      = \Auth::id();
        $expenses->item_name    = $request->item_name;
        $expenses->quantity     = $request->quantity;
        $expenses->unit         = $request->unit;
        $expenses->amount       = $request->amount;
        $expenses->date         = $request->date;

        $expenses->save();
        toastr()
    ->positionClass('toast-top-center')
    ->addSuccess('Expenses Saved Succefully');
    return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function show(Expenses $expenses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function edit(Expenses $expenses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expenses $expenses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expenses $expenses)
    {
        //
    }

    public function low_balence()
    {
        // return "hiii";
        try {

            $low_balence = User::where('points','<',200)->where('created_by',Auth::id())->get(['name','email','points']);

            return view('expenses.low_balence',compact('low_balence'));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
