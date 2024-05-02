<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShipController;
 
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[ShipController::class,'index'])->name('index');
Route::post('store',[ShipController::class,'store'])->name('store');
Route::get('/table',[ShipController::class,'indextable'])->name('indextable');

Route::get('/ship/{id}',[ShipController::class,'ship'])->name('ship');
Route::get('/token',[ShipController::class,'token'])->name('token');
Route::get('/track',[ShipController::class,'track'])->name('track');