<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware(['middleware' => 'auth:admin'])->group(function() {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);

});
Route::post('/student/store',[ApiController::class, 'store']);
Route::get('/student/index',[ApiController::class, 'index']);


Route::post('/Article/store',[ArticleController::class, 'store']);
Route::get('/Article/index',[ArticleController::class, 'index']);
