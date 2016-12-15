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

//Vinculos
Route::resource('vinculo','\App\Http\Controllers\VinculoController');
Route::post('vinculo/{id}/update','\App\Http\Controllers\VinculoController@update');
//Vinculos


// Relatorios Resources
/********************* Relatórios ***********************************************/

//Route::metodo('link',controller@função')

// Rotas de Relatorios/Listas

Route::post('escola/reportescola','EscolaController@reportescola');
Route::post('escola/reportlaboratorio','EscolaController@reportlaboratorio');

Route::post('funcionario/reportfuncionario','FuncionarioController@reportfuncionario');

// Rotas de Perfis

Route::post('escola/perfilescola','EscolaController@perfilescola');
Route::post('escola/perfillaboratorio','EscolaController@perfillaboratorio');

Route::post('funcionario/perfilfuncionario','FuncionarioController@perfilfuncionario');

// Rotas de Horários
Route::post('funcionario/horariofuncionario','FuncionarioController@horariofuncionario');


Route::group(['middleware'=> 'web'],function(){
});
//horario_funcionario Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('horario_funcionario','\App\Http\Controllers\Horario_funcionarioController');
  Route::post('horario_funcionario/{id}/update','\App\Http\Controllers\Horario_funcionarioController@update');
  Route::get('horario_funcionario/{id}/delete','\App\Http\Controllers\Horario_funcionarioController@destroy');
  Route::get('horario_funcionario/{id}/deleteMsg','\App\Http\Controllers\Horario_funcionarioController@DeleteMsg');
});


//turma Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('turma','\App\Http\Controllers\TurmaController');
  Route::post('turma/{id}/update','\App\Http\Controllers\TurmaController@update');
  Route::get('turma/{id}/delete','\App\Http\Controllers\TurmaController@destroy');
  Route::get('turma/{id}/deleteMsg','\App\Http\Controllers\TurmaController@DeleteMsg');
});

//moodle_simulado Routes
Route::group(['middleware'=> 'web'],function(){
    Route::resource('moodle_simulado','\App\Http\Controllers\Moodle_simuladoController');
    Route::resource('moodle_simulado/upload','\App\Http\Controllers\Moodle_simuladoController@upload');
    Route::post('moodle_simulado/{id}/update','\App\Http\Controllers\Moodle_simuladoController@update');
    Route::get('moodle_simulado/{id}/delete','\App\Http\Controllers\Moodle_simuladoController@destroy');
    Route::get('moodle_simulado/{id}/deleteMsg','\App\Http\Controllers\Moodle_simuladoController@DeleteMsg');
});
