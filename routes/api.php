<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


// POSTS Routes
Route::group([
    // 'middleware' => 'api',
     'prefix' => 'posts'], function () {

    Route::get('', [PostController::class, 'list']);
    Route::get('{post_id}', [PostController::class, 'find']);
    Route::get('{post_id}/comments', [PostController::class, 'getComments']);
    Route::get('{post_id}/related', [PostController::class, 'getRelated']);

    Route::post('', [PostController::class, 'save']);
    Route::patch('', [PostController::class, 'edit']);

    Route::post('{slug}/like', [PostController::class, 'like']);
    Route::post('{slug}/dislike', [PostController::class, 'dislike']);

});


Route::group([
    // 'middleware' => 'api',
     'prefix' => 'comments'], function () {

    Route::post('', [CommentController::class, 'addComment']);
    Route::post('{comment_id}/reply', [PostController::class, 'replyComment']);

});
