<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\OpenItemController;
use App\Http\Controllers\OpenItemMasterController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ComplementartAttendanceController;
use App\Http\Controllers\DeductionController;
use App\Http\Controllers\ForgetController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\MenuMasterController;
use App\Http\Controllers\MessController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PhonePeController;
use App\Http\Controllers\SettlementController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WeeklyMenuController;
use App\Http\Controllers\PreBookingController;
use App\Http\Controllers\MissleaniousController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\LowBalanceController;
use App\Http\Controllers\ComplementaryMealController;
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
Route::get('/passwordhash/{value}', function ($value) {
    return \Hash::make($value);
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

Route::any('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard',function(){
    return view('admin.dashboard');
})->middleware('auth:admin');

Route::get('/mess/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth:mess')->name('mess_dashboard');


// Route::get('/teacher/dashboard',function(){
//     return view('mess.dashboard');
// })->middleware('auth:teacher');


Route::group(['prefix' => 'admin',  'middleware' => 'auth:admin'], function()
{
    Route::get("/adminsettlement",[AdminController::class,'adminsettlement'])->name('adminsettlement.index');
    Route::post("/adminsettlement/request",[AdminController::class,'requested'])->name('adminsettlement.request');
    Route::post("/adminsettlement/pay/{id}",[AdminController::class,'pay'])->name('adminsettlement.pay');


});
Route::group(['prefix' => 'mess',  'middleware' => 'auth:mess'], function()
{
    Route::resource('student',StudentController::class);
    Route::resource('attendance',AttendanceController::class);
    Route::resource('open_item',OpenItemController::class);
    Route::resource('open_item_master',OpenItemMasterController::class);
    Route::resource('menu_master',MenuMasterController::class);
    Route::resource('prebooking',PreBookingController::class);
    Route::resource('leaves',LeaveController::class);
    Route::resource('weekly_menu',WeeklyMenuController::class);
    Route::resource('deductions',DeductionController::class);
    Route::resource('transactions',TransactionController::class);
    Route::get('attendance_all',[AttendanceController::class,'all'])->name('attendance_all');
    Route::get("/settlement",[SettlementController::class,'index'])->name('messsettlement.index');
    Route::post("/settlement/request",[SettlementController::class,'requested'])->name('messsettlement.request');
    Route::post("/settlement/pay/{id}",[SettlementController::class,'pay'])->name('messsettlement.pay');

    Route::resource('missleanious',MissleaniousController::class);

    Route::get('misslenious_status_update/{id}',[MissleaniousController::class,'misslenious_status_update'])->name('misslenious_status_update');

    Route::resource('expenses',ExpensesController::class);
    Route::get("low_balence",[ExpensesController::class,'low_balence'])->name('low_balence');

    Route::resource('lowBalance',LowBalanceController::class);

    Route::resource('complementary_meal',ComplementaryMealController::class);
    Route::resource('complementary_attendance',ComplementartAttendanceController::class);


    Route::get('students_open_item_history',[OpenItemController::class,'students_open_item_history'])->name('students_open_item_history');


});

Route::group(['prefix' => 'admin',  'middleware' => 'auth:admin'], function()
{
    Route::resource('mess',MessController::class);
    Route::get('get_all_transction',[AdminController::class,'get_all_transction']);
    Route::get('get_all_users',[AdminController::class,'get_all_users']);
    Route::get('get_all_subscription',[AdminController::class,'get_all_subscription'])->name('get_all_subscription');
    // Route::get("/settlement",[SettlementController::class,'index'])->name('adminsettlement.index');
    // Route::post("/settlement/request",[SettlementController::class,'requested'])->name('adminsettlement.request');
    // Route::post("/settlement/pay/{id}",[SettlementController::class,'pay'])->name('adminsettlement.pay');

});


// Route::get('/payment', [PaymentController::class, 'index']);
// Route::post('/paybyqr/{id}', [PaymentController::class, 'paybyqr']);
// Route::post('/payment-initiate-request', [PaymentController::class, 'initiate']);
// Route::post('/payment-complete', [PaymentController::class, 'complete'])->name('payment.complete');

Route::get('/plan',[PhonePeController::class,'plan']);
Route::post('/payment',[PhonePeController::class,'initiate']);
Route::any('/payment_sucess',[PhonePeController::class,'payment_sucess']);
Route::any('/check_status',[PhonePeController::class,'check_status']);


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


Route::get('/change-password', [StudentController::class, 'changePassword'])->name('changePassword');
Route::post('/change-password', [StudentController::class, 'changePasswordSave'])->name('postChangePassword');
Route::get('/forget-password', [ForgetController::class, 'forget_password']);
Route::post('/sendotp', [ForgetController::class, 'sendotp'])->name('sendotp');
Route::post('/verifyotp', [ForgetController::class, 'verifyotp'])->name('verifyotp');

Route::get("/routeclear",function (){
    \Artisan::call("route:clear");
    \Artisan::call('config:cache');
    \Artisan::call('cache:clear');
    \Artisan::call('view:clear');
    dd("done");
});

Route::resource('booking',BookingController::class);
Route::post('getBookingmenudata',[BookingController::class,"getBookingmenudata"])->name("getBookingmenudata");
Route::post('cancelbooking',[BookingController::class,"cancelbooking"])->name("cancelbooking");
Route::get('booking_status',[BookingController::class,"booking_status"])->name("booking_status");

Route::resource('leave',LeaveController::class);


Route::get('terms-and-conditions', function(){
    return view('web.terms-and-conditions');
})->name('terms-and-conditions');
Route::get('privacy-policy', function(){
    return view('web.privacy-policy');
})->name('privacy-policy');
Route::get('refund-policy', function(){
    return view('web.refund-policy');
})->name('refund-policy');
Route::get('cancellation-policy', function(){
    return view('web.cancellation-policy');
})->name('cancellation-policy');

