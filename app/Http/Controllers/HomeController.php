<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Leave;
use App\Models\PhonePe;
use App\Models\PreBooking;
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
            $todays_points = Attendance::whereDate('punch_time', Carbon::today())
            ->where('created_by',\Auth::id())->sum('deduction_point');

            $visit = Attendance::whereDate('punch_time', Carbon::today())
            ->where('created_by',\Auth::id())
            // ->groupBy('user_id')
            ->count();

            $total_users = User::where('created_by',\Auth::id())->count();

            $tran =User::where('created_by',\Auth::id())->join('phonepe','phonepe.user_id','users.id')->where('plan','!=',1)->whereDate('phonepe.created_at', Carbon::today())->where('code','PAYMENT_SUCCESS')->sum('amount');
            $low = User::where('points','<',200)->where('created_by',Auth::id())->get(['name','email','points']);
            return view('mess.dashboard',compact('low','todays_points','total_users','visit','tran'));
        }
        else{
            $students = User::find(Auth::id());
            // $topups = Topup::where('user_id',Auth::id())
            // ->join('topup_master','topup_master.id','topup.topup_id')
            // ->orderBy('topup.id','desc')->get();

            $topups = PhonePe::where('user_id',Auth::id())
            ->join('topup_master','topup_master.id','phonepe.plan')
            ->orderBy('phonepe.id','desc')->get();
            $todays_punch = Attendance::where('user_id',Auth::id())
            ->whereDate('punch_time', Carbon::today())
            ->get();
            $all_punch = Attendance::where('user_id',Auth::id())->orderBy('id','Desc')->get();

            $now = Carbon::now()->toDateString();
            $week_menus = WeeklyMenu::
            whereRaw("start_date <=  date('$now')")
            ->whereRaw("end_date >=  date('$now')")
           ->first();

           $prebooking = PreBooking::where("user_id",\Auth::id())->join("menu_master",'menu_master.id',"menu_id")->orderBy('booking_date','DESC')->get();

           $leave = Leave::where('user_id',\Auth::id())->orderBy('leave_date','DESC')->get();
           return view('userdashobard',compact('students','topups','todays_punch','all_punch','week_menus','prebooking','leave'));
        }
    }
}
