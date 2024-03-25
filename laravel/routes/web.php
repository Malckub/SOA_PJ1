<?php

use App\Http\Controllers\reserveController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
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
//
Route::get('/Main',[RoomController::class,'index'])->name('Main');





//makereservere
Route::get('/make',[reserveController::class,'index'])->name('Make');