<?php

use App\Http\Controllers\userController;
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


Route::get("/" , [userController::class , 'index'])->name('index');
Route::get("/single/{id}" , [userController::class , 'getById'])->name('single');
Route::get("/delCache/" , [userController::class , 'delCache'])->name('delCache');
Route::get("/fulldel/" , [userController::class , 'fullDelCache'])->name('fullDel');
