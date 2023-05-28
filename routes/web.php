<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DeductionController;
use App\Http\Controllers\MenuMasterController;
use App\Http\Controllers\MessController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WeeklyMenuController;
use App\Models\Deductions;
use App\Models\WeeklyMenu;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('/user_check',[LoginController::class,'user_check'])->name('user_check');


Route::get('/admin',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin',[LoginController::class,'adminLogin'])->name('admin.login');

Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');

Route::get('/mess',[LoginController::class,'showMessLoginForm'])->name('mess.login-view');
Route::post('/mess',[LoginController::class,'messLogin'])->name('mess.login');

Route::get('/mess/register',[RegisterController::class,'showMessRegisterForm'])->name('mess.register-view');
Route::post('/mess/register',[RegisterController::class,'createMess'])->name('mess.register');

// Route::get('/teacher',[LoginController::class,'showTeacherLoginForm'])->name('teacher.login-view');
// Route::post('/teacher',[LoginController::class,'teacherLogin'])->name('teacher.login');

// Route::get('/teacher/register',[RegisterController::class,'showTeacherRegisterForm'])->name('teacher.register-view');
// Route::post('/teacher/register',[RegisterController::class,'createTeacher'])->name('teacher.register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard',function(){
    return view('admin.dashboard');
})->middleware('auth:admin');

Route::get('/mess/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth:mess');


// Route::get('/teacher/dashboard',function(){
//     return view('mess.dashboard');
// })->middleware('auth:teacher');

Route::group(['prefix' => 'mess',  'middleware' => 'auth:mess'], function()
{
    Route::resource('student',StudentController::class);
    Route::resource('attendance',AttendanceController::class);
    Route::resource('menu_master',MenuMasterController::class);
    Route::resource('weekly_menu',WeeklyMenuController::class);
    Route::resource('deductions',DeductionController::class);
    Route::resource('transactions',TransactionController::class);
    Route::get('attendance_all',[AttendanceController::class,'all'])->name('attendance_all');
});

Route::group(['prefix' => 'admin',  'middleware' => 'auth:admin'], function()
{
    Route::resource('mess',MessController::class);

});


Route::get('/payment', [PaymentController::class, 'index']);
Route::post('/payment-initiate-request', [PaymentController::class, 'initiate']);
Route::post('/payment-complete', [PaymentController::class, 'complete'])->name('payment.complete');


Route::any('logout/logout', [LoginController::class, 'logout'])->name('all_logout');




Route::get('about_us', function(){
    return view('web.about_us');
})->name('about_us');
Route::get('e_canteen',function(){
    return view('web.e_canteen');
})->name('e_canteen');
Route::get('how_to_use', function(){
    return view('web.howto_use');
})->name('how_to_use');
Route::get('benifits', function(){
    return view('web.benifits');
})->name('benifits');
Route::get('how_to_register', function(){
    return view('web.how_to_register');
})->name('how_to_register');

