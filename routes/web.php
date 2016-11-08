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


//pessoa Resources
/********************* pessoa ***********************************************/
Route::resource('pessoa','\App\Http\Controllers\PessoaController');
Route::post('pessoa/{id}/update','\App\Http\Controllers\PessoaController@update');
Route::get('pessoa/{id}/delete','\App\Http\Controllers\PessoaController@destroy');
Route::get('pessoa/{id}/deleteMsg','\App\Http\Controllers\PessoaController@DeleteMsg');
/********************* pessoa ***********************************************/


//escola Resources
/********************* escola ***********************************************/
Route::resource('escola','\App\Http\Controllers\EscolaController');
Route::post('escola/{id}/update','\App\Http\Controllers\EscolaController@update');
Route::get('escola/{id}/delete','\App\Http\Controllers\EscolaController@destroy');
Route::get('escola/{id}/deleteMsg','\App\Http\Controllers\EscolaController@DeleteMsg');
/********************* escola ***********************************************/


//ocupacao Resources
/********************* ocupacao ***********************************************/
Route::resource('ocupacao','\App\Http\Controllers\OcupacaoController');
Route::post('ocupacao/{id}/update','\App\Http\Controllers\OcupacaoController@update');
Route::get('ocupacao/{id}/delete','\App\Http\Controllers\OcupacaoController@destroy');
Route::get('ocupacao/{id}/deleteMsg','\App\Http\Controllers\OcupacaoController@DeleteMsg');
/********************* ocupacao ***********************************************/


//funcionario Resources
/********************* funcionario ***********************************************/
Route::resource('funcionario','\App\Http\Controllers\FuncionarioController');
Route::post('funcionario/{id}/update','\App\Http\Controllers\FuncionarioController@update');
Route::get('funcionario/{id}/delete','\App\Http\Controllers\FuncionarioController@destroy');
Route::get('funcionario/{id}/deleteMsg','\App\Http\Controllers\FuncionarioController@DeleteMsg');
/********************* funcionario ***********************************************/


// Relatorios Resources
/********************* Relatórios ***********************************************/
// Route::post('funcionario/reportfuncionario','\App\Http\Controllers\FuncionarioController@reportfuncionario');
Route::post('funcionario/reportfuncionario','FuncionarioController@reportfuncionario');



