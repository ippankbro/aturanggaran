<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SumberController;
use App\Http\Controllers\RencanaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PendapatanController;
use App\Http\Controllers\PengeluaranController;
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

Route::get('/', [HomeController::class, 'index'])->middleware('auth');
Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);
Route::post('register', [RegisterController::class, 'store']);

// Route::get('sumber',[SumberController::class, 'index'])->middleware('auth');
// Route::post('sumber',[SumberController::class, 'store']);
// Route::delete('sumber/{sumber}',[SumberController::class, 'destroy']);

Route::get('edit-data-{sumber}', [SumberController::class, 'edit'])->middleware('auth');
Route::get('sumber-tambah', [SumberController::class, 'create'])->middleware('auth');
Route::resource('sumbers', SumberController::class)->middleware('auth');


Route::resource('users', UserController::class)->middleware('auth');
Route::get('user-tambah',[UserController::class,'create'] )->middleware('auth');
Route::get('edit-user-{user}',[UserController::class,'edit'])->middleware('auth');


Route::resource('rencanas',RencanaController::class)->middleware('auth');
Route::get('rencana-tambah',[RencanaController::class,'create'] )->middleware('auth');
Route::get('edit-rencana-{rencana}',[RencanaController::class,'edit'] )->middleware('auth');

Route::resource('kategoris',KategoriController::class)->middleware('auth');
Route::get('kategori-tambah',[KategoriController::class,'create'])->middleware('auth');
Route::get('edit-kategori-{kategori}',[KategoriController::class,'edit'])->middleware('auth');

Route::resource('pengeluarans',PengeluaranController::class)->middleware('auth');
Route::get('pengeluaran-tambah',[PengeluaranController::class,'create'])->middleware('auth');
Route::get('pengeluaran-edit-{pengeluaran}',[PengeluaranController::class,'edit'])->middleware('auth');

Route::resource('pendapatans', PendapatanController::class)->middleware('auth');
Route::get('pendapatan-tambah',[PendapatanController::class,'create'])->middleware('auth');
Route::get('pendapatan-edit-{pendapatan}',[PendapatanController::class,'edit'])->middleware('auth');