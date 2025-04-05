<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReelController;
use App\Http\Controllers\TypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('category', CategoryController::class)->only(['index', 'show', 'store', 'update', 'destroy'])
    ->names(['index' => 'category.index', 'store' => 'category.store', 'show' => 'category.show', 'update' => 'category.update', 'destroy' => 'category.destroy']);

Route::resource('news', NewsController::class)->only(['index', 'show', 'store', 'update', 'destroy'])
    ->names(['index' => 'news.index', 'store' => 'news.store', 'show' => 'news.show', 'update' => 'news.update', 'destroy' => 'news.destroy']);

Route::resource('reel', ReelController::class)->only(['index', 'show', 'store', 'update', 'destroy'])
    ->names(['index' => 'reel.index', 'store' => 'reel.store', 'show' => 'reel.show', 'update' => 'reel.update', 'destroy' => 'reel.destroy']);

Route::resource('client', ClientController::class)->only(['index', 'show', 'store', 'update', 'destroy'])
    ->names(['index' => 'client.index', 'store' => 'client.store', 'show' => 'client.show', 'update' => 'client.update', 'destroy' => 'client.destroy']);

Route::resource('comment', CommentController::class)->only(['index', 'show', 'store', 'update', 'destroy'])
    ->names(['index' => 'comment.index', 'store' => 'comment.store', 'show' => 'comment.show', 'update' => 'comment.update', 'destroy' => 'comment.destroy']);

Route::resource('type', TypeController::class)->only(['index', 'show', 'store', 'update', 'destroy'])
    ->names(['index' => 'type.index', 'store' => 'type.store', 'show' => 'type.show', 'update' => 'type.update', 'destroy' => 'type.destroy']);
