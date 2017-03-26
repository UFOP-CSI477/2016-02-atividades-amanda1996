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
Route::resource('disciplinas', 'DisciplinaController');
Route::resource('alunos', 'AlunoController');
Route::resource('cidades', 'CidadeController');
Route::resource('estados', 'EstadoController');
Route::resource('turmas', 'TurmaController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
