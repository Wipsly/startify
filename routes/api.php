<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/test', 'HomeController@test')->middleware('auth:api');
Route::post('/updateUserPersonal', 'Profile\SettingController@updateUserPersonal')->middleware('auth:api');

Route::get('/getAuthUser', 'HomeController@getAuthUser')->middleware('auth:api');

/*
Route::middleware('auth:api')->post('/test', function (Request $request) {
    $name = $request->input('username');
    return $name;
});
*/
