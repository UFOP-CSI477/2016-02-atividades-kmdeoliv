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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/about', function () {
    return view('about');
});

Route::resource('disciplinas', 'DisciplinaController');
Route::resource('turmas', 'TurmaController');
Route::resource('estados', 'EstadoController');
Route::resource('cidades', 'CidadeController');
Route::resource('alunos', 'AlunoController');
