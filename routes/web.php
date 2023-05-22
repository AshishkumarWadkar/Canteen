<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
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

Route::get('/admin',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin',[LoginController::class,'adminLogin'])->name('admin.login');

Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');

Route::get('/mess',[LoginController::class,'showMessLoginForm'])->name('mess.login-view');
Route::post('/mess',[LoginController::class,'messLogin'])->name('mess.login');

Route::get('/mess/register',[RegisterController::class,'showMessRegisterForm'])->name('mess.register-view');
Route::post('/mess/register',[RegisterController::class,'createMess'])->name('mess.register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard',function(){
    return view('admin');
})->middleware('auth:admin');

Route::get('/mess/dashboard',function(){
    return view('mess');
})->middleware('auth:mess');

Route::group(['prefix' => 'mess',  'middleware' => 'auth:mess'], function()
{
    Route::resource('student',StudentController::class);
    Route::resource('attendance',AttendanceController::class);
});


Route::get('/payment', [PaymentController::class, 'index']);
Route::post('/payment-initiate-request/{id}', [PaymentController::class, 'initiate']);
Route::post('/payment-complete', [PaymentController::class, 'complete']);




