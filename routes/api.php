<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout')->middleware('auth:api');
    Route::post('refresh', 'refresh') ->middleware('auth:api');
});

Route::apiResource('document',DocumentController::class);
Route::apiResource('section',SectionController::class);
Route::apiResource('file',FileController::class);
// Route::get('comment',CommentController::class);
// Route::post('comment',CommentController::class);
// Route::post('/comment', [CommentController::class, 'store']);
// Route::get('/comment', [CommentController::class, 'index']);