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

Route::post('register', 'StudentController@register');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/testsubmit','StudentController@testSubmit')->name('test.Data');

Route::post('/create/store','StudentController@store')->name('student.store');

Route::post('/studentlist/updated/{id}','StudentController@Dataupdate')->name('user.update');