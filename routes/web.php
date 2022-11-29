<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NotificationController;
use \App\Http\Controllers\LogoutController;

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

Route::get('/register',     [RegisterController::class, 'register'])->name('register');
Route::post('/register',    [RegisterController::class, 'registerPost'])->name('registerPost');

Route::get('/login',        [AuthController::class, 'index'])->name('login.index');
Route::post('/login',       [AuthController::class, 'login'])->name('login.post');

Route::middleware('auth')->group(function () {
    Route::get('/',                           [NotificationController::class, 'index'])->name('notifications');
    Route::get('notification/create',         [NotificationController::class, 'create'])->name('notifications.create');
    Route::post('notification/store',         [NotificationController::class, 'store'])->name('notifications.store');
    Route::post('notification/destroy',       [NotificationController::class, 'destroy'])->name('notifications.destroy');
    Route::post('notification/change-status', [NotificationController::class, 'changeStatus'])->name('notifications.changeStatus');

    Route::get('/logout',               [LogoutController::class, 'logout'])->name('logout');
});
