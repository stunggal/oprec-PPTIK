<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\WeightController;
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

Route::resource('/', DashboardController::class);

Route::get('createevent', EventController::class . '@createevent');
Route::resource('event', EventController::class);

Route::get('createparticipant', ParticipantController::class . '@createparticipant');
Route::resource('participant', ParticipantController::class);

Route::get('createperiod', PeriodController::class . '@createperiod');
Route::resource('period', PeriodController::class);

Route::resource('weight', WeightController::class);
