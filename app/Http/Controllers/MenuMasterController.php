<?php

namespace App\Http\Controllers;

use App\Models\MenuMaster;
use Flasher\SweetAlert\Laravel\Facade\SweetAlert;
use Illuminate\Http\Request;

class MenuMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = MenuMaster::all()->where('created_by',\Auth::id());
        return view('menu_master.index',compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("menu_master.create");
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
        $menu = new MenuMaster;
        $menu->name = $request->name;
        $menu->type = $request->type;
        $menu->veg_nonveg = $request->veg_nonveg;
        $menu->description = $request->description;
        $menu->created_by = \Auth::id();
        $menu->save();
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
        $menu = MenuMaster::find($id);
        return view('menu_master.edit',compact('menu'));
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
        $menu =  MenuMaster::find($id);
        $menu->name = $request->name;
        $menu->type = $request->type;
        $menu->veg_nonveg = $request->veg_nonveg;
        $menu->description = $request->description;
        $menu->created_by = \Auth::id();
        $menu->save();
        sweetalert("Item Updated");
        return redirect()->route('menu_master.index');
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
