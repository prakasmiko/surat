<?php

use App\Http\Controllers\C_dashboard;
use App\Http\Controllers\C_master;
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

// Route::get('/', function () {
//     return view('layouts/index');
// });

Route::get('/', [C_dashboard::class, 'Dashboard']);

Route::group(['prefix' => 'master'], function () {
    Route::get('/kode-sifat', [C_master::class, 'KodeSifat'])->name('kode-sifat');;
    Route::post('/kode-sifat/add', [C_master::class, 'addKodeSifat'])->name('kode-sifat.add');
    Route::post('/kode-sifat/edit{id}', [C_master::class, 'editKodeSifat'])->name('kode-sifat.edit');
    Route::delete('/kode-sifat/delete{id}', [C_master::class, 'deleteKodeSifat'])->name('kode-sifat.delete');
});
