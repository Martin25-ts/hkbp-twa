<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GerejaPageController;
use App\Http\Controllers\NaposoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RemajaController;
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

Route::get('/gereja', [GerejaPageController::class,'gerejaPage'])->name('gereja');

Route::get('/logout',[AuthController::class,'logout']);
Route::post('/login',[AuthController::class,'login'])->name('login');

// membuat orang ga bisa akses /login sembarangan
Route::get('/login', function () {
    return redirect('/');
});

Route::get('/naposo',[NaposoController::class,'naposoDashboard'])->name('naposo');
Route::get('/naposo-galery',[NaposoController::class,'naposoGalery'])->name('naposo-galery');
Route::get('/naposo-kegiatan',[NaposoController::class,'naposoKegiatan'])->name('naposo-kegiatan');
Route::get('/naposo-pengurus',[NaposoController::class,'naposoPengurus'])->name('naposo-pengurus');
Route::get('/naposo-tentang',[NaposoController::class,'naposoTentang'])->name('naposo-tentang');

Route::get('/remaja',[RemajaController::class,'remajaDashboard'])->name('remaja');
Route::get('/remaja-kegiatan',[RemajaController::class,'remajaKegiatan'])->name('remaja-kegiatan');
Route::get('/remaja-galery',[RemajaController::class,'remajaGalery'])->name('remaja-galery');
Route::get('/remaja-pengurus',[RemajaController::class,'remajaPengurus'])->name('remaja-pengurus');
Route::get('/remaja-tentang',[RemajaController::class,'remajaTentang'])->name('remaja-tentang');



// sunday card
Route::post('/sundaypost',[PostController::class,'sundaystore']);
Route::post('/sundayupdate',[UpdateController::class,'sundayUpdate']);

//

Route::post('/beritaPost',[PostController::class,'beritaPost'])->name('berita.post');
Route::post('/beritaUpdate',[UpdateController::class,'sundayUpdate']);


