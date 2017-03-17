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
//primeiro parâmetro da rota é o caminho que o navegador deve acessar
//o segundo parâmetro é a função que dará uma resposta ao browser
Route::get('/', function(){
    $produtos = DB::select(DB::raw('SELECT * FROM produtos'));
    return view('produtos.index',compact('produtos',$produtos));
});

Route::resource('produtos', 'ProdutosController');

Route::resource('compras', 'ComprasController');

Route::get('/users/home_admin', [
  'uses' => 'HomeController@home_admin',
  'as' => 'getHomeAdmin'
]);

Route::get('users/home_cliente',[
  'uses' => 'HomeController@home_cliente',
  'as' => 'getHomeCliente'
]);

Route::resource('user', 'UserController');

Route::patch('produtos/add/{produto}', [
  'uses' => 'ComprasController@addCarrinho',
  'as' => 'addCarrinho'
]);

Route::get('remove/{produto}', 'ComprasController@removeCarrinho');

Route::get('/carrinho', [
  'uses' => 'ComprasController@verCarrinho',
  'as' => 'verCarrinho'
]);

Route::post('/carrinho', [
  'uses' => 'ComprasController@store',
  'as' => 'finalizaCompra'
]);

Auth::routes();

// Route::get('/home', 'HomeController@index');
