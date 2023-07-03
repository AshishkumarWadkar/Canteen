<?php

namespace App\Http\Controllers;

use App\Models\MenuMaster;
use App\Models\PreBooking;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if($request->id)
        {
            $prebook =  PreBooking::where('id',$request->id)->first();
            $prebook->status = 1;
            if($prebook->save())
            {
                sweetalert("Order Placed Succesfully");
            }
            else
            {
                sweetalert()->addError("Something went wrong");
            }
            return response()->json([], 200, []);
        }

        $now = Carbon::now();
        $booking_date =Carbon::parse($now->startOfWeek())->addDays($request->day-1);

        if(PreBooking::where("user_id",\Auth::id())->where('menu_id',$request->menu)->whereDate('booking_date',$booking_date)->doesntExist())
        {
            $preBooking = new PreBooking;
            $preBooking->user_id = \Auth::id();
            $preBooking->booking_date = $booking_date;
            $preBooking->menu_id = $request->menu;
            $preBooking->status = 1;
            if($preBooking->save())
            {
                sweetalert("Perbooking Done Successfully");
                $data["message"] = "order placed";
                $data["success"] = true;
                return response()->json($data, 200);
            }
            else
            {
                sweetalert()->addError("Something Went Wrong");
                $data["message"] = "Somthing Went Wrong";
                $data["success"] = false;
                return response()->json($data, 200);
            }

        }
        else
        {
            sweetalert()->addInfo("Already order placed");
            $data["message"] = "Already order placed";
            $data["success"] = false;
            return response()->json($data, 200);

        }


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
        return $id;
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
    public function getBookingmenudata(Request $request)
    {
        $menu  = MenuMaster::find($request->menu);

        $now = Carbon::now();
        $booking_date =Carbon::parse($now->startOfWeek())->addDays($request->day-1);
        $exists= PreBooking::where("user_id",\Auth::id())->where('menu_id',$request->menu)->whereDate('booking_date',$booking_date)->first() ?? [];
        $data['success'] = true;
        $data["data"] = $menu;
        $data["exists"] = $exists;

        $date = $booking_date;
        $carbon_date = Carbon::parse($date);
        $carbon_date->addHours(23)->addMinutes(59)->subDay(1);

       $can_book = $carbon_date->lt(Carbon::now());
       $data["can_book"] = $can_book;

        return response()->json($data, 200);
    }
    public function cancelbooking(Request $request)
    {
        $prebook =  PreBooking::where('id',$request->id)->first();
        $prebook->status = 2;
        if($prebook->save())
        {
            sweetalert("Order Cancelled Successfully");
        }
        else
        {
            sweetalert()->addError("Something went wrong");
        }
        return response()->json([], 200, []);
    }
}
