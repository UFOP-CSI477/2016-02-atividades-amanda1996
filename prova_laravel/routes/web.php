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

Route::get('/', function () {
    $eventos = DB::select(DB::raw("SELECT * FROM eventos"));
    return view('eventos.index', compact('eventos',$eventos));
});

Route::get('/eventos/index', 'EventosController@index');

Route::get('/registros/create',[
    'uses' => 'RegistrosController@create',
    'as' => 'getCreateRegistro'
  ]);

Route::post('/registros/create', [
    'uses' => 'RegistrosController@store',
    'as' => 'postCreateRegistro'
]);

Route::get('/atletas/home', [
    'uses' => 'AtletasController@home',
    'as' => 'getHomeAtletas'
]);

// Route::get('/registros/{atleta}', function($id){
//
//   $registros = DB::select(DB::raw("SELECT e.nome, r.data, r.pago,
//               count(r.atleta_id) AS qtd, count(r.atleta_id) * e.preco AS total
//               FROM eventos e INNER JOIN registros r ON e.id = r.evento_id GROUP BY e.id"));
//               //ordenar pelo nome do evento
//   return view('eventos.indexA')->with('registros', $registros);
// });

Route::get('/registros/index',[
    'uses' => 'RegistrosController@index',
    'as' => 'getRegistrosIndex'
]);

Route::get('/admin/home',function(){
  return view('admin.home');
});

Route::get('atletas/index', [
  'uses' => 'AtletasController@index',
  'as' => 'getAtletas'
]);

Route::post('atletas/home', [
  'uses' => 'AtletasController@selecionaAtleta',
  'as' => 'selecionaAtleta'
]);

Route::get('eventos/indexA/{id}', [
  'uses' => 'EventosController@indexA',
  'as' => 'getEventosAtleta'
]);

Route::get('registros/index2', [
  'uses' => 'RegistrosController@index2',
  'as' => 'getRelatorio'
]);
