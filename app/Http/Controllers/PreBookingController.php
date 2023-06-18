<?php

namespace App\Http\Controllers;

use App\Models\PreBooking;
use Flasher\SweetAlert\Laravel\Facade\SweetAlert;
use Illuminate\Http\Request;

class PreBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $prebookings = PreBooking::select('prebooking.*','users.name as user_name','menu_master.name as menu_name','menu_master.type as type')
                                        ->join('users','users.id','prebooking.user_id')
                                        ->join('menu_master','menu_master.id','prebooking.menu_id')
                                        ->get();
        return view('prebooking.index',compact('prebookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("prebooking.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        //
        $prebooking = new PreBooking;
        $prebooking->name = $request->name;
        $prebooking->type = $request->type;
        $prebooking->veg_nonveg = $request->veg_nonveg;
        $prebooking->description = $request->description;
        $prebooking->created_by = \Auth::id();
        $prebooking->save();
        sweetalert("Item Added Successfully");

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
        $prebooking = PreBooking::find($id);
        return view('prebooking.edit',compact('prebooking'));
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
        $prebooking =  PreBooking::find($id);
        $prebooking->name = $request->name;
        $prebooking->type = $request->type;
        $prebooking->veg_nonveg = $request->veg_nonveg;
        $prebooking->description = $request->description;
        $prebooking->created_by = \Auth::id();
        $prebooking->save();
        sweetalert("Item Updated");
        return redirect()->route('prebooking.index');
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
