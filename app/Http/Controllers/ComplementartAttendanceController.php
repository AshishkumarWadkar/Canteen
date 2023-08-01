<?php

namespace App\Http\Controllers;

use App\Models\ComplementaryAttendance;
use App\Models\ComplementaryMeal;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class ComplementartAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $event = ComplementaryMeal::all()->where('mess_id',\Auth::id());
        $todays_punch = ComplementaryAttendance::join('users','user_id','users.id')
        ->join('complementary_meal','complementary_meal.id','complementary_attendance.event_id')
        ->where('mess_id',\Auth::id());


        if(isset($request->from) && isset($request->to))
        {
                $todays_punch = $todays_punch->whereDate('complementary_meal.created_at', '>=', $request->from);
                $todays_punch = $todays_punch->whereDate('complementary_meal.created_at', '<=', $request->to);
        }

       $fromdate   = $request->from;
       $todate     = $request->to;
       $todays_punch   = $todays_punch->get(['users.name','complementary_meal.event_name','complementary_attendance.created_at']);

        return view('complementary_attendance.index',compact('event','todays_punch','fromdate','todate'));
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
        if($request->event == 0)
        {
            toastr()->positionClass('toast-top-center')->addError('Please Select the Event');
            return redirect()->route('complementary_attendance.index');
        }
        $student = User::where("barcode",$request->barcode)->where('created_by',\Auth::id())->first(['id','name']);
        $set_event = $request->event;
        $event = ComplementaryMeal::all()->where('mess_id',\Auth::id());
        $todays_punch = ComplementaryAttendance::join('users','user_id','users.id')
                        ->join('complementary_meal','complementary_meal.id','complementary_attendance.event_id')
                        ->get(['users.name','complementary_meal.event_name','complementary_attendance.created_at']);
        if(($student == ""))
        {
            toastr()->positionClass('toast-top-center')->addError('Barcode Not Added To System ');
            return view('complementary_attendance.index',compact('event','student','set_event','todays_punch'));
        }
        if(ComplementaryAttendance::where('user_id',$student->id)->where('event_id',$request->event)->exists())
        {
            toastr()->positionClass('toast-top-center')->addError('Duplicate Entry');
            return view('complementary_attendance.index',compact('event','student','set_event','todays_punch'));
        }
        $ca = new ComplementaryAttendance;
        $ca->user_id = $student->id;
        $ca->event_id = $request->event;
        $ca->created_at	 = \Carbon\Carbon::now();
        $ca->save();
        toastr()->positionClass('toast-top-center')->addSuccess('Ok Verified ');
        $todays_punch = ComplementaryAttendance::join('users','user_id','users.id')
        ->join('complementary_meal','complementary_meal.id','complementary_attendance.event_id')
        ->get(['users.name','complementary_meal.event_name','complementary_attendance.created_at']);
        return view('complementary_attendance.index',compact('event','student','set_event','todays_punch'));

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
