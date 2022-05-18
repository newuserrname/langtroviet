<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\User;
use App\District;
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
// User
Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');
Route::get('logout', 'AuthController@logout');
Route::post('save_user_info', 'AuthController@saveUserInfo')->middleware('jwtAuth');

// Post Motelroom
Route::get('posts_all', 'PostsMotelroomController@postsAll')->middleware('jwtAuth');
Route::post('posts/create', 'PostsMotelroomController@postsCreate')->middleware('jwtAuth');
Route::post('posts/update', 'PostsMotelroomController@postsUpdate')->middleware('jwtAuth');
Route::post('posts/delete', 'PostsMotelroomController@postsDelete')->middleware('jwtAuth');

Route::get('/districts-all', function (){
    return District::all();
});
