<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/create',[HomeController::class,'create']);
Route::post('/add',[HomeController::class,'add']);
Route::get('/edit/{id}',[HomeController::class,'edit']);
Route::post('/update/{id}',[HomeController::class,'edit']);
Route::get('/delete/{id}',[HomeController::class,'delete']);

Route::get('/Category',[CategoryController::class,'index']);
Route::get('/Category/create',[CategoryController::class,'create']);
Route::post('/Category/add',[CategoryController::class,'add']);
Route::get('/Category/edit/{id}',[CategoryController::class,'edit']);
Route::post('/Category/update/{id}',[CategoryController::class,'edit']);
Route::get('/Category/delete/{id}',[CategoryController::class,'delete']);
