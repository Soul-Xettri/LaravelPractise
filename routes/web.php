<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\RegistrationController;
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

//BAsic controller Route
Route::get('/',[DemoController::class,'index']);
Route::get('/about',[DemoController::class,'about']);
// Route::get('/about','App\Http\Controllers\DemoController@about'); Laravel 8 method
// Route::get('/about','DemoController@about'); Laravel 7 method
// Route::get('/about','DemoController::about'); old Laravel method

//single action controller invokes only 1 action Route
Route::get('/courses',SingleActionController::class);

//Resource Controller Route
Route::resource('resource',ResourceController::class);

//form
Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);
