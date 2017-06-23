
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


Route::group(['middleware'=> 'web'],function(){
});
//horario_funcionario Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('horario_funcionario','\App\Http\Controllers\Horario_funcionarioController');
  Route::post('horario_funcionario/{id}/update','\App\Http\Controllers\Horario_funcionarioController@update');
  Route::get('horario_funcionario/{id}/delete','\App\Http\Controllers\Horario_funcionarioController@destroy');
  Route::get('horario_funcionario/{id}/deleteMsg','\App\Http\Controllers\Horario_funcionarioController@DeleteMsg');
});

//horario_funcionario Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('horario_funcionario','\App\Http\Controllers\Horario_funcionarioController');
  Route::post('horario_funcionario/{id}/update','\App\Http\Controllers\Horario_funcionarioController@update');
  Route::get('horario_funcionario/{id}/delete','\App\Http\Controllers\Horario_funcionarioController@destroy');
  Route::get('horario_funcionario/{id}/deleteMsg','\App\Http\Controllers\Horario_funcionarioController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});
//moodle_simulado Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('moodle_simulado','\App\Http\Controllers\Moodle_simuladoController');
  Route::post('moodle_simulado/{id}/update','\App\Http\Controllers\Moodle_simuladoController@update');
  Route::get('moodle_simulado/{id}/delete','\App\Http\Controllers\Moodle_simuladoController@destroy');
  Route::get('moodle_simulado/{id}/deleteMsg','\App\Http\Controllers\Moodle_simuladoController@DeleteMsg');
});
//turma Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('turma','\App\Http\Controllers\TurmaController');
  Route::post('turma/{id}/update','\App\Http\Controllers\TurmaController@update');
  Route::get('turma/{id}/delete','\App\Http\Controllers\TurmaController@destroy');
  Route::get('turma/{id}/deleteMsg','\App\Http\Controllers\TurmaController@DeleteMsg');
});

//modal Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('modal','\App\Http\Controllers\ModalController');
  Route::post('modal/{id}/update','\App\Http\Controllers\ModalController@update');
  Route::get('modal/{id}/delete','\App\Http\Controllers\ModalController@destroy');
  Route::get('modal/{id}/deleteMsg','\App\Http\Controllers\ModalController@DeleteMsg');
});

//upload_csv Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('upload_csv','\App\Http\Controllers\Upload_csvController');
  Route::post('upload_csv/{id}/update','\App\Http\Controllers\Upload_csvController@update');
  Route::get('upload_csv/{id}/delete','\App\Http\Controllers\Upload_csvController@destroy');
  Route::get('upload_csv/{id}/deleteMsg','\App\Http\Controllers\Upload_csvController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
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

//eja Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('eja','\App\Http\Controllers\EjaController');
  Route::post('eja/{id}/update','\App\Http\Controllers\EjaController@update');
  Route::get('eja/{id}/delete','\App\Http\Controllers\EjaController@destroy');
  Route::get('eja/{id}/deleteMsg','\App\Http\Controllers\EjaController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});
//eja Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('eja','\App\Http\Controllers\EjaController');
  Route::post('eja/{id}/update','\App\Http\Controllers\EjaController@update');
  Route::get('eja/{id}/delete','\App\Http\Controllers\EjaController@destroy');
  Route::get('eja/{id}/deleteMsg','\App\Http\Controllers\EjaController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});
//ensinofundamental Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('ensinofundamental','\App\Http\Controllers\EnsinofundamentalController');
  Route::post('ensinofundamental/{id}/update','\App\Http\Controllers\EnsinofundamentalController@update');
  Route::get('ensinofundamental/{id}/delete','\App\Http\Controllers\EnsinofundamentalController@destroy');
  Route::get('ensinofundamental/{id}/deleteMsg','\App\Http\Controllers\EnsinofundamentalController@DeleteMsg');
});

//educacaoinfantil Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('educacaoinfantil','\App\Http\Controllers\EducacaoinfantilController');
  Route::post('educacaoinfantil/{id}/update','\App\Http\Controllers\EducacaoinfantilController@update');
  Route::get('educacaoinfantil/{id}/delete','\App\Http\Controllers\EducacaoinfantilController@destroy');
  Route::get('educacaoinfantil/{id}/deleteMsg','\App\Http\Controllers\EducacaoinfantilController@DeleteMsg');
});

//programa Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('programa','\App\Http\Controllers\ProgramaController');
  Route::post('programa/{id}/update','\App\Http\Controllers\ProgramaController@update');
  Route::get('programa/{id}/delete','\App\Http\Controllers\ProgramaController@destroy');
  Route::get('programa/{id}/deleteMsg','\App\Http\Controllers\ProgramaController@DeleteMsg');
});

//ensinofundamental Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('ensinofundamental','\App\Http\Controllers\EnsinofundamentalController');
  Route::post('ensinofundamental/{id}/update','\App\Http\Controllers\EnsinofundamentalController@update');
  Route::get('ensinofundamental/{id}/delete','\App\Http\Controllers\EnsinofundamentalController@destroy');
  Route::get('ensinofundamental/{id}/deleteMsg','\App\Http\Controllers\EnsinofundamentalController@DeleteMsg');
});

//eja Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('eja','\App\Http\Controllers\EjaController');
  Route::post('eja/{id}/update','\App\Http\Controllers\EjaController@update');
  Route::get('eja/{id}/delete','\App\Http\Controllers\EjaController@destroy');
  Route::get('eja/{id}/deleteMsg','\App\Http\Controllers\EjaController@DeleteMsg');
});
