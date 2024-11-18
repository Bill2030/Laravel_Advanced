<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Jobcontroller;
use App\Http\Controllers\Homecontroller;

Route::get('/', [Homecontroller::class,'index']);
Route::resource('/jobs', JobController::class);
