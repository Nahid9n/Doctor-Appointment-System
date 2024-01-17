<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\WebsiteController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\DoctorDepartmentController;
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

Route::get('/',[WebsiteController::class,'index'])->name('home');

Route::get('/dashboard',[AdminDashboardController::class,'index'])->name('admin.dashboard');
Route::resource('doctor-department',DoctorDepartmentController::class);
