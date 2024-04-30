<?php

use App\Http\Controllers\askController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;

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
Route::get("/",[welcomeController::class,"hi"]);
Route::get("login",[welcomeController::class,"login"]);
Route::get("aboutus",[welcomeController::class,"aboutus"]);






