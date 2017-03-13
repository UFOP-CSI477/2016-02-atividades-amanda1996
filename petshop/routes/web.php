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
Route::get('/', function () {
    return 'Olá! :)';
});

Route::resource('produtos', 'ProdutosController');

// Route::resource('users','Users@Controller');

Route::resource('compras', 'ComprasController');

Route::get('/produtos', 'ProdutosController@index');//pagina principal

Route::get('/produtos/create',[
    'uses' => 'ProdutosController@create',
    'as' => 'getCreateProduto'
  ]);//pagina de cadastro de produtos

Route::post('/produtos/create', [
    'uses' => 'ProdutosController@store',
    'as' => 'postCreateProduto'
  ]);//método para inserir produtos no banco de dados

Route::get('/produtos/{produto}',function ($id){
  $produto = DB::table('produtos')->find($id);
  return view('produtos.show')->with('produto', $produto);
});//detalhes de produto

Route::get('/users/home_admin', [
  'uses' => 'UserController@home_admin',
  'as' => 'getHomeAdmin'
]);

Route::get('/produtos/edit/{produto}', function($id){
  $produto = DB::table('produtos')->find($id);
  return view('produtos.edit')->with('produto',$produto);
});//formulário para editar produto

Route::put('/produtos/edit/{produto}','ProdutosController@update');//atualiza dados editados no BD

// Route::get('/users/login', [
//   'uses' => 'UsersController@showLogin',
//   'as' => 'showLogin'
// ]);//formulário para efetuar login

// Route::post('/users/login', [
//     'uses' => 'UsersController@doLogin',
//     'as' => 'doLogin'
// ]);

Route::get('/produtos/destroy/{produto}', 'ProdutosController@destroy');

Route::get('users/home_cliente/{cliente}',[
  'uses' => 'HomeController@home_cliente',
  'as' => 'getHomeCliente'
]);

Route::get('users/home_admin',[
  'uses' => 'HomeController@home_admin',
  'as' => 'getHomeCliente'
]);


Route::get('/compras/index/{cliente}', function ($id){
    $compras = DB::select(DB::raw("SELECT * FROM compras WHERE user_id = '$id'"));
    return view('compras.index')->with('compras',$compras);
});

Route::post('/produtos/{produto}', [
  'uses' => 'ComprasController@store',
  'as' => 'postCreateCompra'
]);

Route::get('/users/edit/{user}','UserController@edit');

Route::resource('user', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index');
