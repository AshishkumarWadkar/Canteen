<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\User;
use App\Models\Division;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class = Classes::all();
        $division = Division::all();
        $generated_barcode = $this->generateBarcodeNumber();
        return view('mess.add_student',compact('generated_barcode','class','division'));
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
        $student = new User;
        $student->existing = $request->existing ?? 0;
        $student->barcode = $request->barcode;
        $student->name = $request->name;
        $student->class_id = $request->class;
        $student->division_id = $request->division;
        $student->email = $request->phone;
        $student->password = \Hash::make($request->phone);
        $student->save();

        return redirect()->back()->with('success', 'Student added');    }
    function generateBarcodeNumber()
    {
        $number = mt_rand(00000000000000, 99999999999999);
        if ($this->barcodeNumberExists($number)) {
            return generateBarcodeNumber();
        }

        return $number;
    }

    function barcodeNumberExists($number)
    {

        return  \DB::table('messes')
            ->select('id')
            ->where('id', '=', $number)->exists();
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
