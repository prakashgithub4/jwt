<?php

use Illuminate\Http\Request;

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

Route::post('login', 'APILoginController@login');

// users is a route protected by jwt
Route::middleware('jwt.auth')->post('users', function () {
    return auth('api')->user();
});
Route::group(['middleware'=>'jwt.auth'],function(){
  
  Route::post('posts/add', 'Postcontroller@addpost');
  Route::get('post/all', 'Postcontroller@allpost');
  Route::post('post/delete', 'Postcontroller@deletePost');
  Route::post('post/update', 'Postcontroller@editpost');
   Route::get('post/details/{id?}', 'Postcontroller@details');

});


