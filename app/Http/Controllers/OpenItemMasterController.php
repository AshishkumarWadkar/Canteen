<?php

namespace App\Http\Controllers;

use App\Models\OpenItemMaster;
use Flasher\SweetAlert\Laravel\Facade\SweetAlert;
use Illuminate\Http\Request;


class OPenItemMasterController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $open_items = OpenItemMaster::all()->where('mess_id',\Auth::id());
        return view('open_item_master.index',compact('open_items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("open_item_master.create");
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
        $open_item               = new OpenItemMaster;
        $open_item->name         = $request->name;
        $open_item->amount       = $request->amount;
        $open_item->mess_id   = \Auth::id();
        $open_item->save();
        sweetalert("Open Item Added Successfully");
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
        $open_items = OpenItemMaster::find($id);
        return view('open_item_master.edit',compact('open_items'));
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
        $open_item              =  OpenItemMaster::find($id);
        $open_item->name        = $request->name;
        $open_item->amount      = $request->amount;
        $open_item->mess_id     = \Auth::id();
        $open_item->save();
        sweetalert("Oen Item Updated");
        return redirect()->route('open_item_master.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return "hiii";
        $open_item              =  OpenItemMaster::find($id);
        $open_item->delete();
        sweetalert("Open Item Updated");
        return redirect()->back();
    }
}
