<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/records', [HomeController::class, 'get'])->name('records');
Route::get('/view/{id}', [HomeController::class, 'view'])->name('view');
Route::post('/store', [HomeController::class, 'store'])->name('store');
