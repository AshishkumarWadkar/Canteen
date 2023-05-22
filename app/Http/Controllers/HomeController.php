<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Topup;
use Illuminate\Http\Request;
use App\Models\User;

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

        }
        elseif(Auth::guard('mess')->check())
        {

        }
        else{
            $students = User::find(Auth::id());
            $topups = Topup::where('user_id',Auth::id())
            ->join('topup_master','topup_master.id','topup.topup_id')
            ->orderBy('topup.id','desc')->get();
            // $attendance = Attendance::
            return view('userdashobard',compact('students','topups'));
        }
    }
}
