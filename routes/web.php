<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UpdateController;
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


Route::get('/', [DashboardController::class,'home'])->name('/');
Route::get('/dashboard', [DashboardController::class,'home'])->middleware('auth')->name('dashboard');;

Route::get('/gereja', [DashboardController::class,'gereja']);

Route::get('/logout',[AuthController::class,'logout']);
Route::post('/login',[AuthController::class,'login'])->name('login');

// membuat orang ga bisa akses /login sembarangan
Route::get('/login', function () {
    return redirect('/');
});

Route::get('/naposo',[PageController::class,'index']);


// sunday card
Route::post('/sundaypost',[PostController::class,'sundaystore']);
Route::post('/sundayupdate',[UpdateController::class,'sundayUpdate']);




