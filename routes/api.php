<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrackController;
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
Route::post('/article', [ArticleController::class, 'store']);
Route::get('/article', [ArticleController::class, 'index']);
Route::get('/article/{article}', [ArticleController::class, 'show']);
Route::delete('/article/{article}', [ArticleController::class, 'delete']);
Route::put('/article/{article}', [ArticleController::class, 'update']);


//News
Route::post('/news', [NewsController::class, 'store']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{news}', [NewsController::class, 'show']);
Route::delete('/news/{news}', [NewsController::class, 'delete']);
Route::put('/news/{news}', [NewsController::class, 'update']);


//podcast

Route::post('/podcast', [PodcastController::class, 'store']);
Route::get('/podcast', [PodcastController::class, 'index']);
Route::get('/podcast/{podcast}', [PodcastController::class, 'show']);
Route::delete('/podcast/{podcast}', [PodcastController::class, 'delete']);
Route::put('/podcast/{podcast}', [PodcastController::class, 'update']);


//Tracks

Route::post('/track', [TrackController::class, 'store']);
Route::get('/track', [TrackController::class, 'index']);
Route::get('/track/{track}', [TrackController::class, 'show']);
Route::delete('/track/{track}', [TrackController::class, 'delete']);
Route::put('/track/{track}', [TrackController::class, 'update']);


//Comment
Route::post('/comment/{commentableType}/{commentableId}', [CommentController::class, 'store']);












