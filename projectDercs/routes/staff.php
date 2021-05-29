<?php

  use App\Http\Controllers\Staff\LoginController;
    
    Route::get('/staff/login', [LoginController::class, 'showLoginForm'])->name('staff.login');
    Route::post('/staff/login', [LoginController::class, 'login'])->name('staff.login.post');
    Route::get('/staff/logout', [LoginController::class, 'logout'])->name('staff.logout');

    Route::group(['middleware' => ['auth:staff']], function () {

        Route::get('/', function () {
            return view('staff.dashboard.index');
        })->name('staff.dashboard');
    
    });



