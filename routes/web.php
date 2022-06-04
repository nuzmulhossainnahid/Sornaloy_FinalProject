<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
