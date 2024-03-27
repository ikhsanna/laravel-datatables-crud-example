<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\loginController;


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
Route::middleware(['guest'])->group(function (){
    Route::get('/',[loginController::class,'loginpage']);
    Route::post('/',[loginController::class, 'check']);
});

Route::get('/dashboard',[Controller::class,'dashboard']);

Route::get('/pegawai', [pegawaiController::class, 'index'])->name('pegawai.index');
Route::post('/pegawai/addData', [pegawaiController::class, 'store'])->name('pegawai.store');
Route::post('/pegawai/edits', [pegawaiController::class, 'edit'])->name('pegawai.edits');
Route::post('/pegawai/updates', [pegawaiController::class, 'updates'])->name('pegawai.updates');
Route::post('/pegawai/hapus', [pegawaiController::class, 'destroy'])->name('pegawai.hapus');

// login page route

