<?php

namespace App\Http\Controllers;

use App\Models\PreviousPoints;
use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\User;
use App\Models\PhonePe;
use App\Models\Division;
use Auth;
use App\Http\Requests\UserRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $students = User::all()->where('created_by',Auth::id());
        return view('mess.studentslist',compact('students'))->with('success', 'thank you');;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class = Classes::all();
        $division = Division::all();
        $generated_barcode = $this->generateBarcodeNumber();
        return view('mess.add_student',compact('generated_barcode','class','division'));
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
        $student->created_by = Auth::user()->id;
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
        $class = Classes::all();
        $division = Division::all();
        $student = User::find($id);
        $student_recharge_histotry = Phonepe::with('user')->where('user_id', $id)->where('plan', '!=', 1)->where('plan', '!=', 6)->where('plan', '!=', 11)->where('plan', '!=', 16)->orderBy('id', 'DESC')->get();
        $student_recharge_histotry_sum = Phonepe::with('user')->where('user_id', $id)->where('plan', '!=', 1)->where('plan', '!=', 6)->where('plan', '!=', 11)->where('plan', '!=', 16)->where('code','PAYMENT_SUCCESS')->sum('amount');
        $prev_point = PreviousPoints::where('user_id',$id)->get();
        return view('mess.update_student',compact('student','class','division','student_recharge_histotry','student_recharge_histotry_sum','prev_point'));

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
        // return $request->all();
        $request->validate(
            [
                // 'barcode' => 'required|unique:users,barcode,'.$request->barcode

            ],[

            ]
        );
        if($request->role == 1)
        {

            if($request->class ==0 )
            {
                toastr()->positionClass('toast-top-center')->addError('Unknown Student`s Class');
                return redirect()->back();
            }
            if($request->division ==0)
            {
                toastr()->positionClass('toast-top-center')->addError('Unknown Student`s Division');
                return redirect()->back();
            }
        }



        $student = User::find($id);
        $student->existing = $request->existing ?? 0;
        $student->barcode = $request->barcode;
        $student->name = $request->name;
        $student->class_id = $request->class;
        $student->division_id = $request->division;
        $student->email = $request->phone;
        // $student->is_subscribed = $request->is_subscribed;
        $student->points =  $student->points + $request->new_amt;
        // $student->password = \Hash::make($request->phone);
        $student->save();

        //previous points
        if($request->new_amt != 0)
        {

            $prev = new PreviousPoints;
            $prev->mess_id = \Auth::id();
            $prev->user_id = $id;
            $prev->points = $request->new_amt;
            $prev->points = $request->new_amt;
            $prev->save();
        }

        toastr()->addSuccess('User Updated Sucessfully');
        return redirect()->back();

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

    public function changePasswordSave(Request $request)
    {

        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:6|string'
        ]);
        $auth = Auth::user();

 // The passwords matches
        if (!Hash::check($request->get('current_password'), $auth->password))
        {
            return back()->with('error', "Current Password is Invalid");
        }

// Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0)
        {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }

        $user =  User::find($auth->id);
        $user->password =  Hash::make($request->new_password);
        $user->save();
        return back()->with('success', "Password Changed Successfully");
    }
    public function changePassword(Request $request)
    {
        return view('change-password');
    }
}
