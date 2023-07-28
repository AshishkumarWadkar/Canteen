<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $leaves = Leave::join('users','users.id','user_id')->where('created_by',\Auth::id());
        if($request->date)
        {
            $leaves = $leaves->whereDate('leave_date',$request->date);
        }


        $leaves = $leaves->get();
        $count = $leaves->count();
        $date = $request->date ?? "";
        return view('leaves.index',compact('leaves','count','date'));
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
        if(Leave::where('user_id',\Auth::id())->whereDate("leave_date",$request->date)->doesntExist())
        {

            $leave = new Leave;
            $leave->user_id = \Auth::id();
            $leave->leave_date = $request->date;
            if($leave->save())
            {
                sweetalert("Leave Marked Successfully");
            }
            else
            {
                sweetalert()->addError("Somthing went wrong");
            }
        }
        else
        {
            sweetalert()->addInfo("Leave already Marked !");

        }
        return redirect("/home");
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
        if(Leave::find($id)->delete())
        {
            sweetalert("Attendance Deleted Successfully");
        }
        return redirect("/home");

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
