<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DbController;

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
    return redirect()->route('login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/add-candidate', [DashboardController::class, 'create'])->name('candidate.add');
    Route::post('/add-candidate', [DashboardController::class, 'store']);
    Route::get('/edit-candidate/{id}', [DashboardController::class, 'edit'])->name('candidate.edit');
    Route::patch('/update-candidate/{id}', [DashboardController::class, 'update'])->name('candidate.update');
    Route::delete('/delete-candidate/{id}', [DashboardController::class, 'destroy'])->name('candidate.delete');
});

// Route::fallback(function(){
//     return "This route doesn't exist";
// });

Route::get('/db', [DbController::class, 'index']);
Route::get('/test', [DbController::class, 'test']);
Route::get('/storage', [DbController::class, 'store']);