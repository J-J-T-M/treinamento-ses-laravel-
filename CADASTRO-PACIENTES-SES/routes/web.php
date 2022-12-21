<?php

use App\Http\Controllers\CountyController;
use App\Http\Controllers\PatientController;
use App\Models\Patient;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');
// Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
Route::resource('patients', PatientController::class);
Route::resource('counties', CountyController::class);
