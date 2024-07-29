<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\viewpegawaiController;
use App\Http\Controllers\addpegawaiController;
use App\Http\Controllers\addpelatihanController;
use App\Http\Controllers\viewpelatihanController;
use App\Http\Controllers\viewmateriController;
use App\Http\Controllers\viewtestController;
use App\Http\Controllers\absensiController;

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

//Route::get('/', function () {return view('kerangka.master');});

Route::get('/dashboard' , [dashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/' , [loginController::class, 'index'])->name('login');
Route::get('/register' , [registerController::class, 'index'])->name('register');
Route::post('/regist' , [registerController::class, 'store'])->name('register.store');
Route::post('/log' , [loginController::class, 'login'])->name('login.store');
Route::post('/logout' , [loginController::class, 'logout'])->name('logout');


Route::get('/listpegawai' , [viewpegawaiController::class, 'index'])->name('listpegawai');
Route::get('/addpegawai' , [viewpegawaiController::class, 'create'])->name('addpegawai');
Route::post('/addpegawai' , [viewpegawaiController::class, 'store'])->name('addpegawai.store');

Route::get('/addpelatihan' , [addpelatihanController::class, 'index'])->name('addpelatihan');
Route::get('/viewpelatihan' , [viewpelatihanController::class, 'index'])->name('viewpelatihan');
Route::get('/viewdetailpelatihan' , [viewpelatihanController::class, 'show'])->name('viewdetailpelatihan');
Route::get('/viewtest' , [viewpelatihanController::class, 'viewtest'])->name('viewtest');

Route::get('/addmateri' , [viewmateriController::class, 'create'])->name('addmateri');
Route::get('/viewmateri' , [viewmateriController::class, 'index'])->name('viewmateri');

Route::get('/viewtestquestion' , [viewtestController::class, 'index'])->name('viewtest2');
Route::get('/addtest' , [viewtestController::class, 'create'])->name('addtest');
Route::get('/showtest' , [viewtestController::class, 'show'])->name('showtest');

Route::get('/absensi' , [absensiController::class, 'index'])->name('absensi');


