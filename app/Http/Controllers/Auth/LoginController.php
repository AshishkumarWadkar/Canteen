<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:mess')->except('logout');
    }


    public function user_check(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);


        if (\Auth::guard('admin')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->intended('/admin/dashboard');
            // return "admin";
        }
        else if (\Auth::guard('mess')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->intended('/admin/dashboard');

        }
        else{
            return redirect()->intended('/dashboard');
        }
    }

    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => route('admin.login-view'), 'title'=>'Admin', ]);
    }
    public function showMessLoginForm()
    {
        return view('auth.login', ['url' => route('mess.login-view'), 'title'=>'Mess']);
    }
    public function showTeacherLoginForm()
    {
        return view('auth.login', ['url' => route('teacher.login-view'), 'title'=>'Teacher']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required',
            'password' => 'required|min:6'
        ]);

        if (\Auth::guard('admin')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }
    public function messLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required',
            'password' => 'required|min:6'
        ]);

        if (\Auth::guard('mess')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->intended('/mess/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }
    public function messTeacher(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required',
            'password' => 'required|min:6'
        ]);

        if (\Auth::guard('teacher')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->intended('/teacher/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }
}
