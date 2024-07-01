<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/list-program', [App\Http\Controllers\HomeController::class, 'listProgram'])->name('list-program');
Route::get('/detail-program', [App\Http\Controllers\HomeController::class, 'detailProgram'])->name('detail-program');
Route::get('/status-pembayaran', [App\Http\Controllers\HomeController::class, 'statusPembayaran'])->name('status-pembayaran');
Route::get('/bukti-pembayaran', [App\Http\Controllers\HomeController::class, 'buktiPembayaran'])->name('bukti-pembayaran');
Route::get('/sertifikat', [App\Http\Controllers\HomeController::class, 'sertifikat'])->name('sertifikat');
Route::get('/template-create', [App\Http\Controllers\HomeController::class, 'templateCreate'])->name('template-create');
Route::get('/landing', [App\Http\Controllers\HomeController::class, 'landing'])->name('landing');
Route::get('/template-update', [App\Http\Controllers\HomeController::class, 'templateUpdate'])->name('template-update');
Route::get('/template-table', [App\Http\Controllers\HomeController::class, 'templateTable'])->name('template-table');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
