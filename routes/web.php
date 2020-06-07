<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('student/create');
});



Route::get('/create','StudentController@create');
// Route::post('/create/store','StudentController@store')->name('student.store');

Route::get('/studentlist','StudentController@userList')->middleware("cors")->name('student.list');

//Route::get('/studentlist', ['middleware' => 'cors', 'StudentController@userList'])->name('student.list');



Route::get('/studentlist/{id}/view','StudentController@viewData')->name('user.view');

Route::get('/studentlist/{id}/delete','StudentController@deleteData')->middleware("cors")->name('user.delete');

Route::get('/studentlist/{id}/updated','StudentController@getDataupdate')->name('user.update');
//Route::put('/studentlist/{id}/updated','StudentController@Dataupdate')->name('user.update');

Route::get('/departmentList','StudentController@departmentList');


Route::get('/user_Login','StudentLogin@index');
Route::post('/user_Login','StudentLogin@loginCheck')->name('student.login');


Route::get('/admin_Login','Admin@index');



Route::get('/upload', 'Dataimport@index'); // localhost:8000/
Route::post('/uploadFile', 'Dataimport@uploadFile');

Route::get('/testget','StudentController@testGet');
//Route::post('/testsubmit','StudentController@testSubmit')->name('test.Data');