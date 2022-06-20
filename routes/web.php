<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DynamicDependent;

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
Route::get('/app', [HomeController::class,'app']);
Route::get('/home', [HomeController::class,'redirect']);

Route::get('/', [HomeController::class,'index']);



// Slider

Route::get('/slider_view', [AdminController::class,'slider_view']);
Route::post('/create_slider', [AdminController::class,'create_slider']);
Route::get('/slider_table', [AdminController::class,'slider_table']);
Route::get('/delete_slider/{id}', [AdminController::class,'delete_slider']);
Route::get('/edit_slider/{id}', [AdminController::class,'edit_slider']);
Route::post('/edit_sliderConf/{id}', [AdminController::class,'edit_sliderConf']);


// Loan Calculator
Route::get('/loan_calculator', [HomeController::class,'loan_calculator']);
// howToApply.blade
Route::get('/howToApply', [HomeController::class,'howToApply']);

// Applay
Route::get('/apply_loan', [HomeController::class,'apply_loan']);

Route::post('/apply_loan_customer', [HomeController::class,'apply_loan_customer']);
Route::post('/apply_loan_request', [HomeController::class,'apply_loan_request']);
//




//Admin
//Web user

Route::get('/webUserView', [AdminController::class,'webUserView']);

//Employ
Route::get('/createEmploy', [AdminController::class,'createEmploy']);
Route::get('/add_employ/{id}', [AdminController::class,'add_employ']);
Route::post('/create_employ_user/{id}', [AdminController::class,'create_employ_user']);
Route::get('/listEmploy', [AdminController::class,'listEmploy']);

Route::get('/edit_employ/{id}', [AdminController::class,'edit_employ']);
Route::get('/delete_employ/{id}', [AdminController::class,'delete_employ']);

Route::post('/edit_employ_user/{id}', [AdminController::class,'edit_employ_user']);

Route::get('/list_bankSchedule', [AdminController::class,'list_bankSchedule']);

//User View

Route::get('/user_view', [AdminController::class,'user_view']);




//Application
Route::post('/application', [ApplicationController::class,'application']);
//Apply Bank
Route::get('/apply_bank_home', [ApplicationController::class,'apply_bank_home']);



//Appointment

Route::get('/bank_app', [AppointmentController::class,'bank_app']);

Route::post('/bank_app_from', [AppointmentController::class,'bank_app_from']);
Route::get('/create_schedule', [AppointmentController::class,'create_schedule']);
Route::get('/schedule_bank_create', [AppointmentController::class,'schedule_bank_create']);
Route::get('/schedule_bank_branch/{bankName}', [AppointmentController::class,'schedule_bank_branch']);
Route::post('schedule_bank_branch/fetch', 'AppointmentController@fetch')->name('schedule_bank_branch.fetch');


Route::post('/Crete_schedule_bank_from', [AppointmentController::class,'Crete_schedule_bank_from']);
Route::post('/schedulfrom_bank', [AppointmentController::class,'schedulfrom_bank']);
Route::get('/list_bankSchedule', [AppointmentController::class,'list_bankSchedule']);
Route::get('/show_schedule', [AppointmentController::class,'show_schedule']);
Route::get('/schedule_bank_show', [AppointmentController::class,'schedule_bank_show']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
