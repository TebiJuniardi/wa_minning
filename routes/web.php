<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WAController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-proccess', [AuthController::class, 'proses_login'])->name('login-proccess');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::prefix('master')->group(function () {
        // master wa
        Route::get('/list-master-wa', [WAController::class, 'index'])->name('list-master-wa');
        Route::get('/create-master-wa', [WAController::class, 'create'])->name('create-master-wa');
        Route::post('/store-master-wa', [WAController::class, 'store'])->name('store-master-wa');
        Route::get('/edit-master-wa/{id}', [WAController::class, 'edit'])->name('edit-master-wa');
        Route::post('/update-master-wa', [WAController::class, 'update'])->name('update-master-wa');
        Route::get('/delete-master-wa/{id}', [WAController::class, 'destroy'])->name('delete-master-wa');

        // master wa
        Route::get('/list-master-user', [UserController::class, 'index'])->name('list-master-user');
        Route::get('/create-master-user', [UserController::class, 'create'])->name('create-master-user');
        Route::post('/store-master-user', [UserController::class, 'store'])->name('store-master-user');
        Route::get('/edit-master-user/{id}', [UserController::class, 'edit'])->name('edit-master-user');
        Route::post('/update-master-user', [UserController::class, 'update'])->name('update-master-user');
        Route::get('/delete-master-user/{id}', [UserController::class, 'destroy'])->name('delete-master-user');
    });
});
