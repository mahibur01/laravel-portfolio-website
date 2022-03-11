<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('Home');
// });


Route::get('/', [HomeController::class, 'HomeIndex']);

Route::get('/visitor', [VisitorController::class, 'VisitorIndex']);

Route::get('/service', [ServiceController::class, 'ServiceIndex']);

Route::get('/getServicesData', [ServiceController::class, 'getServiceData']);
