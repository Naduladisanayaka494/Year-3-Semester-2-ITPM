<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\deliverymanagementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\reportController;

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
    return view('delivery.index');
});

Route::resource('/delivery', deliverymanagementController::class);
Route::resource('/dashboard', DashboardController::class);
Route::resource('/generate-report/{id}',reportController::class);

