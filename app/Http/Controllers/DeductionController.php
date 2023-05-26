<?php

namespace App\Http\Controllers;

use App\Models\Deductions;
use Illuminate\Http\Request;

class DeductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ded = Deductions::where('mess_id',\Auth::id())->first();
        return view('mess.deductions.index',compact('ded'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mess.deductions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flag = Deductions::where('mess_id',\Auth::id())->first();
        if($flag)
        {
            $flag->b_kids_price = $request->b_kids_price;
            $flag->m_kids_price = $request->m_kids_price;
            $flag->b_student_price = $request->b_student_price;
            $flag->m_student_price = $request->m_student_price;
            $flag->b_teacher_price = $request->b_teacher_price;
            $flag->m_teacher_price = $request->m_teacher_price;
            $flag->mess_id = \Auth::id();
            $flag->save();
        }
        else
        {
        $ded = new Deductions;
        $ded->b_kids_price = $request->b_kids_price;
        $ded->m_kids_price = $request->m_kids_price;
        $ded->b_student_price = $request->b_student_price;
        $ded->m_student_price = $request->m_student_price;
        $ded->b_teacher_price = $request->b_teacher_price;
        $ded->m_teacher_price = $request->m_teacher_price;
        $ded->mess_id = \Auth::id();
        $ded->save();
        return redirect()->back();
        }
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
