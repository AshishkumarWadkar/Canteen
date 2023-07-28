<?php

namespace App\Http\Controllers;

use App\Models\Deductions;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendance;
use App\Models\OpenItem;
use App\Models\OpenItemMaster;
use Carbon\Carbon;

class OpenItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $todays_punch = [];
        $todays_punch = Attendance::join('users','attendance.user_id','users.id','deduction_point')
        ->where('users.created_by',\Auth::id())
        ->whereDate('punch_time', Carbon::today())
        ->orderBy('attendance.id','desc')->get(['attendance.id','name','punch_time','meal_type','deduction_point','points']);

        $open_items = OpenItemMaster::where('mess_id',\Auth::id())
                    ->get();

        return view('mess.attendance',compact('todays_punch','open_items'));
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

// return $request;

        $student = User::where("barcode",$request->barcode)->first(['id','name','email','points','role','class_id']);
        $open_item = OpenItemMaster::find($request->open_item_id);

        $diduction_amount = $open_item->amount * $request->open_item_quantity;
        if($student == "")
        {
            toastr()->positionClass('toast-top-center')->addError('Barcode Not Added To System ');
            return view('mess.attendance',compact('student'));
        }


        if($student->points < 300)
        {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET','https://www.fast2sms.com/dev/bulkV2?authorization=Zt6WfbaYPApCVylwmzX0QTUjBeE41L53xgnOKh8ckJ7iGuDvr2JzlABp52DacG7MfoZ6smUv0NtqduES&route=dlt&sender_id=ECANTN&message=155943&variables_values=&flash=0&numbers='.$student->email);
            toastr()->positionClass('toast-top-center')->addWarning('Low balance 🍕');
        }

        // $todays_punch = Attendance::join('users','attendance.user_id','users.id','deduction_point')
        //                             ->where('users.created_by',\Auth::id())
        //                             ->whereDate('punch_time', Carbon::today())
        //                             ->orderBy('attendance.id','desc')
        //                             ->get(['attendance.id','name','punch_time','meal_type','deduction_point','points']);
        if($student->points <  $diduction_amount)
        {
            toastr()->positionClass('toast-top-center')->addError('Insufficient Balance, Please Recharge !');
            return redirect()->back();
        }else{
           $diduction = $student->points -  $diduction_amount;
            // $diduction_open_item_point =  $open_item->amount;
            $student->points  = $diduction;
            $student->save();
            if($student){
                $open_item                     = new OpenItem;
                $open_item->user_id            = $student->id;
                $open_item->quantity           = $request->open_item_quantity;
                $open_item->mess_id            = \Auth::id();
                $open_item->item_id            = $request->open_item_id;
                $open_item->punch_time         = Carbon::now();
                $open_item->deduction_point    = $diduction_amount;
                $open_item->save();
            }


            toastr()->positionClass('toast-top-center')->addSuccess('Barcode Scanned');
            // return view('mess.attendance',compact('student','todays_punch','open_items'));
            return redirect()->route('attendance.index');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
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
        $OpenItem =  OpenItem::find($id);
        $user = User::find($OpenItem->user_id);
        $user->points = $user->points + $OpenItem->deduction_point;
        $OpenItem->delete();
        $user->save();
        sweetalert("Record Deleted");
        return redirect()->route('attendance.index');
    }

    public function all(Request $request)
    {
        $all = Attendance::join('users','attendance.user_id','users.id','deduction_point')
        ->where('users.created_by',\Auth::id())
        ->orderBy('attendance.id','desc');

        if(isset($request->from) && isset($request->to))
        {
                $all = $all->whereDate('attendance.created_at', '>=', $request->from);
                $all = $all->whereDate('attendance.created_at', '<=', $request->to);
        }

        $all = $all->get(['name','punch_time','meal_type','deduction_point','points']);
        $fromdate = $request->from;
        $todate = $request->to;
        return view('mess.all_punching',compact('all','fromdate','todate'));
    }

    public function students_open_item_history(Request $request)
    {
        // return "hiii";
        $soihs = OpenItem::select('open_item.*','users.name as user_name', 'users.points as user_points','open_item_master.name as opi_name')
        ->join('open_item_master','open_item_master.id','open_item.item_id')
                            ->join('users', 'users.id','open_item.user_id')
                            ->where('open_item.mess_id',\Auth::id())
                            ->orderBy('open_item.id','desc');

        if(isset($request->from) && isset($request->to))
        {
                $soihs = $soihs->whereDate('open_item.created_at', '>=', $request->from);
                $soihs = $soihs->whereDate('open_item.created_at', '<=', $request->to);
        }
         $soihs =  $soihs->get();
        $fromdate = $request->from;
        $todate = $request->to;
        // return $soihs;
        return view('mess.open_item_all_punching',compact('soihs','fromdate','todate'));
    }
}
