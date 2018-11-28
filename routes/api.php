<?php

use Illuminate\Http\Request;


Route::apiResource('categories', 'CategoryController');

Route::post('user/register', 'RegisterController@register');
Route::post('user/login', 'LoginController@login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
    });

Route::middleware('jwt.auth')->get('users', function(Request $request) {
    return auth()->user();
});

// Route::group(['middleware' => 'jwt.auth'], function(){
// Route::post('user/logout', 'LoginController@logout');
// });
