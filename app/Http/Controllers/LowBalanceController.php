<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Attendance;
use App\Models\Leave;
use App\Models\PhonePe;
use App\Models\PreBooking;
use App\Models\Topup;
use App\Models\WeeklyMenu;
use App\Models\User;
use App\Models\OpenItem;
use Carbon\Carbon;
use App\Models\Expenses;
use Auth;

class LowBalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {

            $low = User::where('points','<',200)->where('created_by',Auth::id());


            if(isset($request->from) && isset($request->to))
            {
                    $low = $low->whereDate('expenses.created_at', '>=', $request->from);
                    $low = $low->whereDate('expenses.created_at', '<=', $request->to);
            }

            $low   = $low->get(['name','email','points']);
            $fromdate   = $request->from;
            $todate     = $request->to;

            return view('lowbalance.index',compact('low','fromdate','todate'));
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
