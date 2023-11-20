<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('comment', 'CommentCrudController');
    Route::crud('music-comment', 'MusicCommentCrudController');
    Route::crud('musics', 'MusicsCrudController');
    Route::crud('news', 'NewsCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('user-comment', 'UserCommentCrudController');
    Route::crud('user-music', 'UserMusicCrudController');
    Route::crud('admin', 'AdminCrudController');
    Route::crud('news-comment', 'NewsCommentCrudController');
}); // this should be the absolute last line of this file
