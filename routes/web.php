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
//disciplinas
Route::post('assignDisciplina','\App\Http\Controllers\FuncionarioController@assignDisciplina');
Route::get('removeDisciplina','\App\Http\Controllers\FuncionarioController@removeDisciplina');
//turno
Route::post('assignTurno','\App\Http\Controllers\FuncionarioController@assignTurno');
Route::get('removeTurno','\App\Http\Controllers\FuncionarioController@removeTurno');
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
    Route::post('moodle_simulado/{id}/update','\App\Http\Controllers\Moodle_simuladoController@update');
    Route::get('moodle_simulado/{id}/delete','\App\Http\Controllers\Moodle_simuladoController@destroy');
    Route::get('moodle_simulado/{id}/deleteMsg','\App\Http\Controllers\Moodle_simuladoController@DeleteMsg');

    Route::get('moodle_simulado/importExport', '\App\Http\Controllers\Moodle_simuladoController@importExport');
    Route::get('moodle_simulado/downloadExcel/{type}', '\App\Http\Controllers\Moodle_simuladoController@downloadExcel');
    Route::post('moodle_simulado/importExcel', '\App\Http\Controllers\Moodle_simuladoController@importExcel');
});


//moodle_simulado Routes

Route::get('simulado_escola_report','Moodle_simulado_reportController@simulado_escola_report');
Route::get('simulado_turma_report','Moodle_simulado_reportController@simulado_turma_report');


//modal Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('modal/modalSimuladoEscola','ModalController@modalSimuladoEscola');
  Route::resource('modal/modalSimuladoTurma','ModalController@modalSimuladoTurma');
  Route::get('modal/simulado_escola_report','\App\Http\Controllers\ModalController@simulado_escola_report');
  Route::get('modal/simulado_turma_report','\App\Http\Controllers\ModalController@simulado_turma_report');
  Route::get('modal/modaldisciplina','\App\Http\Controllers\FuncionarioController@modaldisciplina');
});


//upload_csv Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('upload_csv','\App\Http\Controllers\Upload_csvController');
  Route::post('upload_csv/{id}/update','\App\Http\Controllers\Upload_csvController@update');
  Route::get('upload_csv/{id}/delete','\App\Http\Controllers\Upload_csvController@destroy');
  Route::get('upload_csv/{id}/deleteMsg','\App\Http\Controllers\Upload_csvController@DeleteMsg');
});


//disciplina Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('disciplina','\App\Http\Controllers\DisciplinaController');
  Route::post('disciplina/{id}/update','\App\Http\Controllers\DisciplinaController@update');
  Route::get('disciplina/{id}/delete','\App\Http\Controllers\DisciplinaController@destroy');
  Route::get('disciplina/{id}/deleteMsg','\App\Http\Controllers\DisciplinaController@DeleteMsg');
});


//turno Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('turno','\App\Http\Controllers\TurnoController');
  Route::post('turno/{id}/update','\App\Http\Controllers\TurnoController@update');
  Route::get('turno/{id}/delete','\App\Http\Controllers\TurnoController@destroy');
  Route::get('turno/{id}/deleteMsg','\App\Http\Controllers\TurnoController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});


//educacao_infatil Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('educacao_infatil','\App\Http\Controllers\Educacao_infatilController');
  Route::post('educacao_infatil/{id}/update','\App\Http\Controllers\Educacao_infatilController@update');
  Route::get('educacao_infatil/{id}/delete','\App\Http\Controllers\Educacao_infatilController@destroy');
  Route::get('educacao_infatil/{id}/deleteMsg','\App\Http\Controllers\Educacao_infatilController@DeleteMsg');
});

//programa Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('programa','\App\Http\Controllers\ProgramaController');
  Route::post('programa/{id}/update','\App\Http\Controllers\ProgramaController@update');
  Route::get('programa/{id}/delete','\App\Http\Controllers\ProgramaController@destroy');
  Route::get('programa/{id}/deleteMsg','\App\Http\Controllers\ProgramaController@DeleteMsg');
});

//eja_i Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('eja_i','\App\Http\Controllers\Eja_iController');
  Route::post('eja_i/{id}/update','\App\Http\Controllers\Eja_iController@update');
  Route::get('eja_i/{id}/delete','\App\Http\Controllers\Eja_iController@destroy');
  Route::get('eja_i/{id}/deleteMsg','\App\Http\Controllers\Eja_iController@DeleteMsg');
});

//eja_ii Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('eja_ii','\App\Http\Controllers\Eja_iiController');
  Route::post('eja_ii/{id}/update','\App\Http\Controllers\Eja_iiController@update');
  Route::get('eja_ii/{id}/delete','\App\Http\Controllers\Eja_iiController@destroy');
  Route::get('eja_ii/{id}/deleteMsg','\App\Http\Controllers\Eja_iiController@DeleteMsg');
});

//fudamental_i Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('fudamental_i','\App\Http\Controllers\Fudamental_iController');
  Route::post('fudamental_i/{id}/update','\App\Http\Controllers\Fudamental_iController@update');
  Route::get('fudamental_i/{id}/delete','\App\Http\Controllers\Fudamental_iController@destroy');
  Route::get('fudamental_i/{id}/deleteMsg','\App\Http\Controllers\Fudamental_iController@DeleteMsg');
});

//fudamental_ii Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('fudamental_ii','\App\Http\Controllers\Fudamental_iiController');
  Route::post('fudamental_ii/{id}/update','\App\Http\Controllers\Fudamental_iiController@update');
  Route::get('fudamental_ii/{id}/delete','\App\Http\Controllers\Fudamental_iiController@destroy');
  Route::get('fudamental_ii/{id}/deleteMsg','\App\Http\Controllers\Fudamental_iiController@DeleteMsg');
});
