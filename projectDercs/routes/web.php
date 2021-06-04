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

//manage pickup and delivey module
//Only user that has authentication can navigate to following functions
Route::middleware(['auth'])->group(function(){

    //to check if the user have rider access, if not they have to login as rider before proceed
    Route::middleware(['is_rider'])->group(function(){
        Route::get('/riderPickupDeliveryPage', function () {
            return view('RiderPickupandDelivery');
        });

        //Navigate to following functions in PickupadnDeliveryController
        Route::get('/viewPendingList', [App\Http\Controllers\PickupandDeliveryController::class, 'viewPendingList']);
        Route::get('/viewDelInfo', [App\Http\Controllers\PickupandDeliveryController::class, 'viewDelInfo']);
        Route::post('/DeliveryEvidence', [App\Http\Controllers\PickupandDeliveryController::class, 'DeliveryEvidence']);

    });

    //to check if the user have customer access, if not they have to login as customer before proceed
    Route::middleware(['is_cust'])->group(function(){
        Route::get('/custPickupDeliveryPage', function () {
            return view('CustPickupandDelivery');
        });

    });

    //to check if the user have staff access, if not they have to login as staff before proceed
    Route::middleware(['guest'])->group(function(){
        Route::get('/staffPickupDeliveryPage', function () {
            return view('StaffPickupandDelivery');
        });

    });
});

//to upload image evidence and display the evidence
Route::get('/uploadfile','PickupadnDeliveryController@index');
Route::post('/uploadfile','PickupandDEliveryController@showUploadFile');

//end of manage pickup and delivery module