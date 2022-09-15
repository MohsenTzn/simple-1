<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StudentController;
use App\Http\Resources\StudentResource;
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

/*
Route::middleware(['middleware' => 'auth:admin'])->group(function() {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);

});*/

//Article
Route::post('/article',[ArticleController::class, 'store']);
Route::get('/article',[ArticleController::class, 'index']);
Route::get('/article/{article}',[ArticleController::class, 'show']);
Route::delete('/article/{article}',[ArticleController::class, 'delete']);

//News
Route::post('/news',[NewsController::class, 'store']);
Route::get('/news',[NewsController::class, 'index']);
Route::get('/news/{news}',[NewsController::class, 'show']);
Route::delete('/news/{news}',[NewsController::class, 'delete']);



