<?php

use App\Http\Controllers\API\PostsController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use Orion\Facades\Orion;

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

// Publicly available.
Route::group(['as' => 'api.'], function () {
    Route::get('posts', function () {
        return Post::all();
    });
});

// Protected by the auth middleware.
Route::middleware(['auth:sanctum'])->group(function () {
    Route::group(['as' => 'api.'], function () {
        Orion::resource('posts', PostsController::class)->except(['index','batchStore', 'batchUpdate']);
    });
});
