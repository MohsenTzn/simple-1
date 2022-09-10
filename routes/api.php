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
Route::post('/Article/store',[ArticleController::class, 'store']);
Route::get('/Article',[ArticleController::class, 'index']);
Route::get('/Article/show/{article}',[ArticleController::class, 'show']);
Route::get('/Article/delete/{article}',[ArticleController::class, 'delete']);
Route::get('/Article/{article}/News',[ArticleController::class, 'ArticleIndex']);

//News
Route::post('/News/store',[NewsController::class, 'store']);
Route::get('/News',[NewsController::class, 'index']);
Route::get('/News/show/{news}',[NewsController::class, 'show']);
Route::get('/News/delete/{news}',[NewsController::class, 'delete']);
Route::get('/News/{news}/Article',[NewsController::class, 'indexNews']);


