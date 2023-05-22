<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendance;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $todays_punch = Attendance::join('users','attendance.user_id','users.id')
        // ->where('punch_time', Carbon::today())
        ->orderBy('attendance.id','desc')->get(['name','punch_time','meal_type']);

        return view('mess.attendance',compact('todays_punch'));
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

        $student = User::where("barcode",$request->barcode)->first(['id','name','email','points']);
        if(!isset($student->id))
        {
            return view('mess.attendance',compact('student'))->with('error', 'Invalid User Please Register');
        }
        $points = 0;
        if($request->meal_type == 1)
        {
            $points = 10;
        }
        elseif($request->meal_type == 2)
        {
            $points = 30;
        }

        if($student->points < $points)
        {
            return view('mess.attendance',compact('student'))->with('error', 'No Balance');
        }

        $flag = Attendance::whereDate('created_at', Carbon::today())->where("meal_type",$request->meal_type)->get();
        $todays_punch = Attendance::join('users','attendance.user_id','users.id')
        // ->where('punch_time', Carbon::today())
        ->orderBy('attendance.id','desc')->get(['name','punch_time','meal_type']);
        if(count($flag)==0)
        {
            $attendance = new Attendance;
            $attendance->user_id = $student->id;
            $attendance->punch_time = Carbon::now();
            $attendance->meal_type = $request->meal_type;
            $attendance->save();
            $student->points = $balance = $student->points - $points;
            $student->save();
            return view('mess.attendance',compact('student','balance','todays_punch'))->with('success', 'Happy Meal :)');


        }
        else
        {

            return view('mess.attendance',compact('student','todays_punch'))->with('error', 'Sorry You Had meal !');
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
