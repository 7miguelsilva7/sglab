
//siem Resources
/********************* siem ***********************************************/
Route::resource('siem','\App\Http\Controllers\SiemController');
Route::post('siem/{id}/update','\App\Http\Controllers\SiemController@update');
Route::get('siem/{id}/delete','\App\Http\Controllers\SiemController@destroy');
Route::get('siem/{id}/deleteMsg','\App\Http\Controllers\SiemController@DeleteMsg');
/********************* siem ***********************************************/




//teste Resources
/********************* teste ***********************************************/
Route::resource('teste','\App\Http\Controllers\TesteController');
Route::post('teste/{id}/update','\App\Http\Controllers\TesteController@update');
Route::get('teste/{id}/delete','\App\Http\Controllers\TesteController@destroy');
Route::get('teste/{id}/deleteMsg','\App\Http\Controllers\TesteController@DeleteMsg');
/********************* teste ***********************************************/
