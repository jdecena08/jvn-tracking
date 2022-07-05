<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
});

Route::get('/dashboard', [MainController::class, 'index']);

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('track-and-trace', [MainController::class, 'track_and_trace'])->name('track-and-trace');
Route::get('transaction-history', [MainController::class, 'transaction_history'])->name('transaction-history');
Route::get('about-us', [MainController::class, 'about_us'])->name('about-us');
Route::get('help-page', [MainController::class, 'help_page'])->name('help-page');
Route::get('admin-dashboard', [MainController::class, 'admin_dashboard'])->name('admin-dashboard');
Route::get('driver-records', [MainController::class, 'driver_records'])->name('driver-records');

