<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', 'ApiController@users')->name('api.users');

Route::get('/users/{user_id}', 'ApiController@userX')->name('api.userX');

Route::get('/posts', 'ApiController@posts')->name('api.posts');

Route::get('/posts/complete', 'ApiController@postsComp')->name('api.postsComp');

Route::get('/posts/{post_id}', 'ApiController@postX')->name('api.postX');

Route::get('/posts/{post_id}/complete', 'ApiController@postXComp')->name('api.postXComp');

Route::get('/statistics', 'ApiController@statistics')->name('api.statistics');
