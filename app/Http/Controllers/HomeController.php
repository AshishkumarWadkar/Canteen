<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Topup;
use App\Models\WeeklyMenu;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::guard('admin')->check())
        {
            return view('admin.dashobard');
        }
        elseif(Auth::guard('mess')->check())
        {
            return view('mess.dashobard');
        }
        else{
            $students = User::find(Auth::id());
            $topups = Topup::where('user_id',Auth::id())
            ->join('topup_master','topup_master.id','topup.topup_id')
            ->orderBy('topup.id','desc')->get();
            $todays_punch = Attendance::where('user_id',Auth::id())
            ->where('punch_time', Carbon::today())
            ->get();
            $all_punch = Attendance::where('user_id',Auth::id())->orderBy('id','Desc')->get();


            $week_menus = WeeklyMenu::whereDate('start_date', '>', now())
        //    ->whereDate('end_date','<=',Carbon::now())
           ->first();



            return view('userdashobard',compact('students','topups','todays_punch','all_punch'));
        }
    }
}
