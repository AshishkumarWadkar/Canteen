<?php

namespace App\Http\Controllers;

use App\Models\Deductions;
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
        $todays_punch = [];
        $todays_punch = Attendance::join('users','attendance.user_id','users.id','deduction_point')
        ->where('users.created_by',\Auth::id())
        ->whereDate('punch_time', Carbon::today())
        ->orderBy('attendance.id','desc')->get(['attendance.id','name','punch_time','meal_type','deduction_point','points']);

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

        $student = User::where("barcode",$request->barcode)->first(['id','name','email','points','role','class_id']);
        $ded = Deductions::where('mess_id',\Auth::id())->first();
        if(($student == ""))
        {
            toastr()->positionClass('toast-top-center')->addError('Barcode Not Added To System ');
            return view('mess.attendance',compact('student'));
        }

        $points = 0;

        if($student->role == 2)
        {
            if($request->meal_type == 1)
            {
                $points = $ded->b_teacher_price;
            }
            elseif($request->meal_type == 2)
            {
                $points = $ded->m_teacher_price;
            }

        }
        else
        {
            if($student->class_id < 5)
            {
                if($request->meal_type == 1)
                {
                    $points = $ded->b_kids_price;
                }
                elseif($request->meal_type == 2)
                {
                    $points = $ded->m_kids_price;
                }

            }
            else
            {
                if($request->meal_type == 1)
                {
                    $points = $ded->b_student_price;
                }
                elseif($request->meal_type == 2)
                {
                    $points = $ded->m_student_price;
                }

            }
        }

        if($student->points < $points)
        {
            toastr()->positionClass('toast-top-center')->addError('Insufficient Balance, Please Recharge !');
            return redirect()->back();
        }
        if($student->points < 300)
        {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET','https://www.fast2sms.com/dev/bulkV2?authorization=Zt6WfbaYPApCVylwmzX0QTUjBeE41L53xgnOKh8ckJ7iGuDvr2JzlABp52DacG7MfoZ6smUv0NtqduES&route=dlt&sender_id=ECANTN&message=155943&variables_values=&flash=0&numbers='.$student->email);
            toastr()->positionClass('toast-top-center')->addWarning('Low balance 🍕');
        }

        $flag = Attendance::where('user_id',$student->id)->whereDate('created_at', Carbon::today())->where("meal_type",$request->meal_type)->get();
        $todays_punch = Attendance::join('users','attendance.user_id','users.id','deduction_point')
        ->where('users.created_by',\Auth::id())
        ->whereDate('punch_time', Carbon::today())
        ->orderBy('attendance.id','desc')->get(['attendance.id','name','punch_time','meal_type','deduction_point','points']);
        if(count($flag)==0)
        {
            $attendance = new Attendance;
            $attendance->user_id = $student->id;
            $attendance->created_by = \Auth::id();
            $attendance->punch_time = Carbon::now();
            $attendance->meal_type = $request->meal_type;
            $attendance->deduction_point = $points;
            $attendance->save();
            $student->points = $balance = $student->points - $points;
            $student->save();

            $todays_punch = Attendance::join('users','attendance.user_id','users.id','deduction_point')
            ->where('users.created_by',\Auth::id())
            ->whereDate('punch_time', Carbon::today())
            ->orderBy('attendance.id','desc')->get(['attendance.id','name','punch_time','meal_type','deduction_point','points']);
            toastr()->positionClass('toast-top-center')->addSuccess('Barcode Scanned');
            return view('mess.attendance',compact('student','balance','todays_punch'));


        }
        else
        {

            toastr()->positionClass('toast-top-center')->addError('Sorry You Had Meal !');
            return view('mess.attendance',compact('student','todays_punch'));
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
        $attendance =  Attendance::find($id);
        $user = User::find($attendance->user_id);
        $user->points = $user->points + $attendance->deduction_point;
        $attendance->delete();
        $user->save();
        sweetalert("Record Deleted");
        return redirect()->route('attendance.index');
    }

    public function all(Request $request)
    {
        $all = Attendance::join('users','attendance.user_id','users.id','deduction_point')
        ->where('users.created_by',\Auth::id())
        ->orderBy('attendance.id','desc');

        if(isset($request->from) && isset($request->to))
        {
                $all = $all->whereDate('attendance.created_at', '>=', $request->from);
                $all = $all->whereDate('attendance.created_at', '<=', $request->to);
        }

        $all = $all->get(['name','punch_time','meal_type','deduction_point','points']);
        $fromdate = $request->from;
        $todate = $request->to;
        return view('mess.all_punching',compact('all','fromdate','todate'));
    }
}
