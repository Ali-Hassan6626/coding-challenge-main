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
Route::get('/get/data/{start}/{limit}', [App\Http\Controllers\HomeController::class, 'getData']);
Route::get('/send/request/{objId}', [App\Http\Controllers\HomeController::class, 'sendRequest']);
Route::get('/with-draw/request/{objId}', [App\Http\Controllers\HomeController::class, 'withDrawRequest']);
Route::get('/accept/request/{objId}', [App\Http\Controllers\HomeController::class, 'acceptRequest']);
Route::get('/remove/connection/{objId}', [App\Http\Controllers\HomeController::class, 'removeConnection']);
