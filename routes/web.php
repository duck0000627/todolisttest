<?php

use App\Http\Controllers\TestController;
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

Route::get ('/',[\App\Http\Controllers\ToDoController::class,'index'])->name('index');
Route::get ('/create',[\App\Http\Controllers\ToDoController::class,'create'])->name('create');
Route::post ('/store',[\App\Http\Controllers\ToDoController::class,'store'])->name('store');


