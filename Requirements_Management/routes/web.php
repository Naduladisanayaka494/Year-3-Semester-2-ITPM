<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequirementsController;
use App\Http\Controllers\RequirementscreateController;
use App\Http\Controllers\AdRequirementsController;
use App\Http\Controllers\reportController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('Addashboard');
Route::get('/ad-dashboard', [App\Http\Controllers\AdDashboardController::class, 'index'])->name('dashboard');
Route::resource('/add-req', RequirementscreateController::class);
Route::resource('/requirements', RequirementsController::class);
Route::resource('/ad-requirements', AdRequirementsController::class);
Route::resource('/generate-report', reportController::class);

Auth::routes();

Route::get('/user/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('user-dashboard');
Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin-dashboard')->middleware('is_admin');