<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReelController;
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
