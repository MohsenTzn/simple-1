<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ArticleController;
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

//Student
Route::post('/student/store',[StudentController::class, 'store']);
Route::get('/student',[StudentController::class, 'index']);
Route::get('/student/show/{student}',[StudentController::class, 'show']);
Route::get('/student/delete/{student}',[StudentController::class, 'delete']);


//Article
Route::post('/Article/store',[ArticleController::class, 'store']);
Route::get('/Article',[ArticleController::class, 'index']);
Route::get('/Article/show/{article}',[ArticleController::class, 'show']);
Route::get('/Article/delete/{article}',[ArticleController::class, 'delete']);
