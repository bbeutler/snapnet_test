<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//REGISTER AS USER (TOKEN)
Route::post('/register', [AuthController::class, 'store']);

Route::middleware('auth:sanctum')->group(function () {
   Route::get('/fetch', [AuthController::class, 'get']);
});
