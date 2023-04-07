<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequirementsController;
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
    return view('login');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
//Route::get('/requirements', [App\Http\Controllers\RequirementsController::class, 'index'])->name('requirements');
Route::resource('/requirements/create', RequirementsController::class);
Route::resource('/requirements', RequirementsController::class);
// Route::controller(RequirementsController::class)->group(function(){
//     //Route::post('/requirements/create', 'create')->name('Requirements.add-requirements');
//     Route::resource('/requirements/create', RequirementsController::class);
//    Route::get('/requirements', 'index')->name('Requirements.requirements');
// });