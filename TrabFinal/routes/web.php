<?php

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
Route::resource('users', 'UsersController');
Route::resource('eventos', 'EventosController');
Route::resource('contatos', 'ContatosController');
Route::resource('bebes', 'BebesController');
Route::post('guardaEventos', array('as' => 'guardaEventos','uses' => 'EventosController@create'));
Route::get('cargaEventos{id?}','EventosController@index');
Route::post('atualizaEventos','EventosController@update');
Route::post('eliminaEvento','EventosController@destroy');

Route::get('/indexT', 'ContatosController@indexT');

Route::get('calendar',function(){
  return view('eventos.calendario');
});
Route::get('/', 'HomeController@index');

Route::get('teste',function(){
  return view('gestante.cadastrar');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'desenv'], function () {
    Route::get('1m', function ()    {
      return view('desenvolvimento.1m');
    });
    Route::get('2m', function ()    {
      return view('desenvolvimento.2m');
    });
    Route::get('3m', function ()    {
      return view('desenvolvimento.3m');
    });
});
Route::get('chegando',function(){
  return view('chegada.show');
});
Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');