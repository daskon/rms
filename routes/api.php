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


Route::resource('roles', 'RoleController');
Route::resource('permissions','PermissionController');


Route::get('/candidate',[
   'uses' => 'CandidatesController@create'
]);

Route::post('/candidate',[
    'uses' => 'CandidatesController@store'
]);

Route::get('/candidate/{id}',[
    'uses' => 'CandidatesController@show'
]);

Route::get('/candidate/{id}',[
    'uses' => 'CandidatesController@edit'
]);

Route::put('/candidate/{id}',[
    'uses' => 'CandidatesController@update'
]);

