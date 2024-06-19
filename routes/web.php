<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\EnkripsiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DalamprosesController;
use App\Http\Controllers\PesananditolakController;
use App\Http\Controllers\PrimeController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/enkripsi',[EnkripsiController::class,'enkripsi']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/pesananmasuk', [PesananController::class, 'index'])->name('pesanan');

Route::get('/dalamproses', [DalamProsesController::class, 'index'])->name('dalamproses');

Route::get('/pesananditolak', [PesananditolakController::class, 'index'])->name('pesananditolak');


Route::get('/prime', [PrimeController::class, 'index']);
Route::post('/prime', [PrimeController::class, 'findPrimes']);
