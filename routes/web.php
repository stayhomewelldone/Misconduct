<?php

use Illuminate\Support\Facades\Auth;
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
//Auth::routes();

Route::get('/', [\App\Http\Controllers\MeldingController::class, 'index'])->name('index');


Route::resource('melding', '\App\Http\Controllers\MeldingController');
Route::resource('behandelaar', 'App\Http\Controllers\BehandelaarController');
Route::patch('melding/{melding}/toggleActivity', [\App\Http\Controllers\BehandelaarController::class, 'toggleActivity'])->name('toggleActivity');
Route::resource('afgerond', '\App\Http\Controllers\AfgerondController');
require __DIR__.'/auth.php';

