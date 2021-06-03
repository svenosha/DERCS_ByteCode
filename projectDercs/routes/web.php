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

//manage customer requets module
Route::middleware(['auth'])->group(function(){

    Route::middleware(['is_rider'])->group(function(){
        Route::get('/riderPickupDeliveryPage', function () {
            return view('RiderPickupandDelivery');
        });
        Route::get('/viewPendingList', [App\Http\Controllers\PickupandDeliveryController::class, 'viewPendingList']);
        

    });

    Route::middleware(['is_cust'])->group(function(){
        Route::get('/custPickupDeliveryPage', function () {
            return view('CustPickupandDelivery');
        });
        Route::post('/CustRequest', [App\Http\Controllers\RequestController::class, 'CustRequest']);

    });

    Route::middleware(['is_staff'])->group(function(){
        Route::get('/staffPickupDeliveryPage', function () {
            return view('StaffPickupandDelivery');
        });

    });
});

//to upload image evidence and display the evidence
Route::get('/uploadfile','PickupadnDeliveryController@index');
Route::post('/uploadfile','PickupandDEliveryController@showUploadFile');

//end of manage customer request module

