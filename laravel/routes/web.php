<?php

use App\Http\Controllers\reserveController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\addReserve;
use App\Http\Controllers\checkres;
use App\Http\Controllers\main;
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

Route::any('/Main',[RoomController::class,'index'])->name('Main');
Route::get('/',[main::class,'index'])->name('real');
Route::any('/send',[RoomController::class,'send'])->name('send');

// Rout::get('/make',[reserveController::class,'index'])->name('make');
Route::any('/makere',[reserveController::class,'makere'])->name('makere');
Route::post('/addRes',[addReserve::class,'addReserve'])->name('res');
Route::get('/check',[checkres::class,'index'])->name('check');
Route::any('/checkres',[checkres::class,'check'])->name('checkcon');
