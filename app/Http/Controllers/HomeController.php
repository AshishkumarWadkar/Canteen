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
use App\Models\OpenItem;
use Carbon\Carbon;
use App\Models\Expenses;
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
            // return "system under maitainace";
            $todays_points = Attendance::whereDate('punch_time', Carbon::today())
            ->where('created_by',\Auth::id())->sum('deduction_point');

            $visit = Attendance::whereDate('punch_time', Carbon::today())
            ->where('created_by',\Auth::id())
            // ->groupBy('user_id')
            ->count();

            $total_users = User::where('created_by',\Auth::id())->count();

            $leaves_count = Leave::join('users','users.id','user_id')
                            ->where('created_by',\Auth::id())
                            ->where('leave_date',Carbon::today())
                            ->count();


            $todays_expenses_sum = Expenses::where('mess_id',\Auth::id())->where('created_at',Carbon::today())->sum('amount');

           $prebookings_count = PreBooking::join('users','users.id','prebooking.user_id')
                                        ->where('users.created_by',\Auth::id())
                                        ->where('booking_date',Carbon::today())
                                        ->where('prebooking.status',1)
                                        ->count();


            $tran =User::where('created_by',\Auth::id())
                        ->join('phonepe','phonepe.user_id','users.id')
                        // ->where('plan','!=',1)
                        ->join('topup_master','topup_master.id','phonepe.plan')
                        ->where('topup_master.is_subscription_plan','!=',1)
                        ->whereDate('phonepe.created_at', Carbon::today())
                        ->where('code','PAYMENT_SUCCESS')
                        ->sum('amount');
            $low = User::where('points','<',200)->where('created_by',Auth::id())->get(['name','email','points']);
            return view('mess.dashboard',compact('low','todays_points','total_users','visit','tran','leaves_count','todays_expenses_sum','prebookings_count'));
        }
        else{
            // if (Auth::id() != 366) {
            //     # code...
            //     return "System In Maitainance";
            // }
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

            // return Carbon::now()->dayOfWeek;
            if(0 == Carbon::now()->dayOfWeek)
            {
                $now = Carbon::now()->addDay(1)->toDateString();
            }
            // return $now;
             $week_menus = WeeklyMenu::
            whereRaw("start_date <=  date('$now')")
            ->whereRaw("end_date >=  date('$now')")
            ->where('created_by',\Auth::user()->created_by)
           ->first();


           $oihs = OpenItem::select('open_item.*','users.name as user_name', 'users.points as user_points','open_item_master.name as opi_name')
                                ->join('open_item_master','open_item_master.id','open_item.item_id')
                               ->join('users', 'users.id','open_item.user_id')
                               ->where('open_item.user_id',\Auth::id())
                               // ->where('open_item.mess_id',\Auth::id())
                               ->orderBy('open_item.id','desc');

        //    if(isset($request->from) && isset($request->to))
        //    {
        //            $oihs = $oihs->whereDate('open_item.created_at', '>=', $request->from);
        //            $oihs = $oihs->whereDate('open_item.created_at', '<=', $request->to);
        //    }
            $oihs =  $oihs->get();
        //    $fromdate = $request->from;
        //    $todate = $request->to;
        //    return  $oihs;


           $prebooking = PreBooking::where("user_id",\Auth::id())->join("menu_master",'menu_master.id',"menu_id")->orderBy('booking_date','DESC')->get();

           $leave = Leave::where('user_id',\Auth::id())->orderBy('leave_date','DESC')->get();
           sweetalert()->timer(100000)->addWarning("Please note that Pre-Booking of meals is compulsory. Food will be served to pre-booked students only");

           return view('userdashobard',compact('students','topups','todays_punch','all_punch','week_menus','prebooking','leave','oihs'));
        }
    }
}
