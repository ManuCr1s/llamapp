<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;

//Routes Authtenticate
Route::get('/', [DashboardController::class,'index']);
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    //Routes No Authtenticate
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::resource('/roles',RoleController::class);
});
