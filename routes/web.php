<?php

use App\Http\Controllers\adminFileController;
use App\Http\Controllers\adminNotificationController;
use App\Http\Controllers\adminProfileController;
use App\Http\Controllers\fileController;
use App\Http\Controllers\notificationController;
use App\Http\Controllers\patientController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\settingsController;
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

Route::resource('patients', patientController::class);

Route::resource('files', fileController::class);

Route::resource('settings', settingsController::class);
Route::get('search', [patientController::class, 'search'])->name('search');
Route::get('/', function () {
    return view('welcome');
});


Route::resource('melding', '\App\Http\Controllers\MeldingController');
Route::resource('behandelaar', 'App\Http\Controllers\BehandelaarController');
Route::patch('melding/{melding}/toggleActivity', [\App\Http\Controllers\BehandelaarController::class, 'toggleActivity'])->name('toggleActivity');
Route::resource('afgerond', '\App\Http\Controllers\AfgerondController');
require __DIR__.'/auth.php';

