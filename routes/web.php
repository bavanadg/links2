<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
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
Route::get('/test/env', function () {
    dd(env('DB_DATABASE')); // dump db variable value one by one
});


// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/submit', [App\Http\Controllers\HomeController::class, 'submit'])->name('submit');
Route::post('/submit',[App\Http\Controllers\HomeController::class, 'submitpost']);



