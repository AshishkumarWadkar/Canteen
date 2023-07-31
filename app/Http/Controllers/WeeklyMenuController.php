<?php

namespace App\Http\Controllers;

use App\Models\MenuMaster;
use App\Models\WeeklyMenu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WeeklyMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $weeklyMenu = WeeklyMenu::orderBy('id','DESC')->where('created_by',\Auth::id())->get();
        return view('weeklymenu.index',compact('weeklyMenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menu = MenuMaster::all()->where('created_by',\Auth::id())->where('type',1);
        $b_menu = MenuMaster::all()->where('created_by',\Auth::id())->where('type',0);
        return view('weeklymenu.create',compact('menu','b_menu'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $flag= WeeklyMenu::where('week_no',$request->week)->where('created_by',\Auth::id())->first();
        if($flag)
        {
            return redirect()->back();
        }
        $year = date("Y");
        $week_no = substr($request->week,6);
        $start_date = (new \DateTime())->setISODate($year, $week_no)->format('Y-m-d');
        $end_date = (new \DateTime())->setISODate($year, $week_no, 7)->format('Y-m-d');

        $weekly_menu = new WeeklyMenu;
        $weekly_menu->created_by =\Auth::id();
        $weekly_menu->week_no = $request->week;
        $weekly_menu->start_date = $start_date;
        $weekly_menu->end_date = $end_date;
        $weekly_menu->sunday = $request->sunday;
        $weekly_menu->monday = $request->monday;
        $weekly_menu->tuesday = $request->tuesday;
        $weekly_menu->wednesday = $request->wednesday;
        $weekly_menu->thursday = $request->thursday;
        $weekly_menu->friday = $request->friday;
        $weekly_menu->saturday = $request->saturday;

        $weekly_menu->b_sunday = $request->b_sunday;
        $weekly_menu->b_monday = $request->b_monday;
        $weekly_menu->b_tuesday = $request->b_tuesday;
        $weekly_menu->b_wednesday = $request->b_wednesday;
        $weekly_menu->b_thursday = $request->b_thursday;
        $weekly_menu->b_friday = $request->b_friday;
        $weekly_menu->b_saturday = $request->b_saturday;
        $weekly_menu->start_date = $start_date;
        $weekly_menu->end_date = $end_date;
        $weekly_menu->save();
        sweetalert("Weekly Menu Added");
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
        //
        $menu = MenuMaster::all()->where('created_by',\Auth::id())->where('type',1);
        $b_menu = MenuMaster::all()->where('created_by',\Auth::id())->where('type',0);
        $week_menu = WeeklyMenu::find($id);
        return view('weeklymenu.edit',compact('menu','week_menu','b_menu'));
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
        $year = date("Y");
        $week_no = substr($request->week,6);
        $start_date = (new \DateTime())->setISODate($year, $week_no)->format('Y-m-d');
        $end_date = (new \DateTime())->setISODate($year, $week_no, 7)->format('Y-m-d');
        $weekly_menu =  WeeklyMenu::find($id);
        $weekly_menu->created_by =\Auth::id();
        $weekly_menu->week_no = $request->week;
        $weekly_menu->start_date = $start_date;
        $weekly_menu->end_date = $end_date;
        $weekly_menu->sunday = $request->sunday;
        $weekly_menu->monday = $request->monday;
        $weekly_menu->tuesday = $request->tuesday;
        $weekly_menu->wednesday = $request->wednesday;
        $weekly_menu->thursday = $request->thursday;
        $weekly_menu->friday = $request->friday;
        $weekly_menu->saturday = $request->saturday;

        $weekly_menu->b_sunday = $request->b_sunday;
        $weekly_menu->b_monday = $request->b_monday;
        $weekly_menu->b_tuesday = $request->b_tuesday;
        $weekly_menu->b_wednesday = $request->b_wednesday;
        $weekly_menu->b_thursday = $request->b_thursday;
        $weekly_menu->b_friday = $request->b_friday;
        $weekly_menu->b_saturday = $request->b_saturday;
        $weekly_menu->start_date = $start_date;
        $weekly_menu->end_date = $end_date;
        $weekly_menu->save();
        sweetalert("Weekly Menu Updated");
        return redirect()->route('weekly_menu.index');
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
