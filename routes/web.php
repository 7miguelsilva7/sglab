<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


//siem Resources
/********************* siem ***********************************************/
Route::resource('siem','\App\Http\Controllers\SiemController');
Route::post('siem/{id}/update','\App\Http\Controllers\SiemController@update');
Route::get('siem/{id}/delete','\App\Http\Controllers\SiemController@destroy');
Route::get('siem/{id}/deleteMsg','\App\Http\Controllers\SiemController@DeleteMsg');
/********************* siem ***********************************************/


//escola Resources
/********************* escola ***********************************************/
Route::resource('escola','\App\Http\Controllers\EscolaController');
Route::post('escola/{id}/update','\App\Http\Controllers\EscolaController@update');
Route::get('escola/{id}/delete','\App\Http\Controllers\EscolaController@destroy');
Route::get('escola/{id}/deleteMsg','\App\Http\Controllers\EscolaController@DeleteMsg');
/********************* escola ***********************************************/


//teste Resources
/********************* teste ***********************************************/
Route::resource('teste','\App\Http\Controllers\TesteController');
Route::post('teste/{id}/update','\App\Http\Controllers\TesteController@update');
Route::get('teste/{id}/delete','\App\Http\Controllers\TesteController@destroy');
Route::get('teste/{id}/deleteMsg','\App\Http\Controllers\TesteController@DeleteMsg');
/********************* teste ***********************************************/


//testis Resources
/********************* testis ***********************************************/
Route::resource('testis','\App\Http\Controllers\TestisController');
Route::post('testis/{id}/update','\App\Http\Controllers\TestisController@update');
Route::get('testis/{id}/delete','\App\Http\Controllers\TestisController@destroy');
Route::get('testis/{id}/deleteMsg','\App\Http\Controllers\TestisController@DeleteMsg');
/********************* testis ***********************************************/

