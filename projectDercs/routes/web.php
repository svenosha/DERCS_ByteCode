<?php

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
Auth::routes();

Route::get('/main', function () {
    return view('welcome');
});

Route::view('/staff', 'staff.dashboard.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
require 'staff.php';

// Route::get('/custHome', [App\Http\Controllers\LoginController::class, 'authenticated'])->name('custHome');

Route::get('rider/home', [App\Http\Controllers\HomeController::class,'riderHome'])->name('rider.home')->middleware('is_rider');