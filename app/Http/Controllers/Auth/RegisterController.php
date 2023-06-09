<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Admin;
use App\Models\Mess;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:mess');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => 'required|regex:/^[0-9]{10}$/|unique:users,email',
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'created_by' => 'required|not_in:0',
            'role' => 'required|not_in:0',
        ],
        [
            'email.regex'=>"Invalid Number",
            'email.unique'=>"Phone Number Already Exists",
            'created_by.not_in' => 'Please Select Canteen',
            'role.not_in' => 'Please Select Role',
    ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        //  $data['email'];
        // try {
            // $client = new \GuzzleHttp\Client();
            // $response = $client->request('POST', 'https://www.fast2sms.com/dev/bulkV2', [
            //     'headers' => [
            //         "authorization"=>"Zt6WfbaYPApCVylwmzX0QTUjBeE41L53xgnOKh8ckJ7iGuDvr2JzlABp52DacG7MfoZ6smUv0NtqduES",
            //         "Content-Type"=>"application/json"
            //     ],

            //     'body' => '{
            //         "route":"dlt",
            //         "sender_id":"ECANTN",
            //         "message":"155942",
            //         "variables_values":"",
            //         "flash":0,
            //         "numbers":'.(string)$data["email"].'",
            //     }',
            // ]);

        // } catch (\Throwable $th) {
        //     //throw $th;
        // }


        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'created_by' => $data['created_by'],
            'class_id' => $data['class_id'],
            'division_id' => $data['division_id'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showAdminRegisterForm()
    {
        return view('auth.register', ['route' => route('admin.register-view'), 'title'=>'Admin']);
    }

    protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('admin');
    }
    public function showMessRegisterForm()
    {
        return view('auth.register', ['route' => route('mess.register-view'), 'title'=>'Mess']);
    }

    protected function createMess(Request $request)
    {
        $this->validator($request->all())->validate();
        $mess = Mess::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('mess');
    }
//     public function showTeacherRegisterForm()
//     {
//         return view('auth.register', ['route' => route('mess.register-view'), 'title'=>'Teacher']);
//     }

//     protected function createTeacher(Request $request)
//     {
//         $this->validator($request->all())->validate();
//         $mess = Teacher::create([
//             'name' => $request['name'],
//             'email' => $request['email'],
//             'password' => Hash::make($request['password']),
//         ]);
//         return redirect()->intended('mess');
//     }
}
