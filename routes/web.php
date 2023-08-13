<?php

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

Route::get('/', function () {
    // dd('here');
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//get data based on range values
Route::get('/get/data/{start}/{limit}', [App\Http\Controllers\HomeController::class, 'getData']);

//send request to the user
Route::get('/send/request/{objId}', [App\Http\Controllers\HomeController::class, 'sendRequest']);

//with draw request form user
Route::get('/with-draw/request/{objId}', [App\Http\Controllers\HomeController::class, 'withDrawRequest']);

//accept request from user
Route::get('/accept/request/{objId}', [App\Http\Controllers\HomeController::class, 'acceptRequest']);

//Remove connection
Route::get('/remove/connection/{objId}', [App\Http\Controllers\HomeController::class, 'removeConnection']);
