<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrentendController;
use App\Http\Controllers\VisaCheckController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('index');
});


Route::get('/contact-us', function () {
    return view('contact-us');
});


Route::get('/about-us', function () {
    return view('about-us');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('visa-status', [FrentendController::class, 'findByPassportNo']);
Route::get('visa-status/{passport_no}', [FrentendController::class, 'showpass']);


Route::resource('visa_checks', VisaCheckController::class);
