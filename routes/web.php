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

Route::resource('client', 'ClientController');
Route::resource('animal', 'AnimalController');

Route::get('palpacao', 'PalpacaoController@index')->name('listaPalpacao');
Route::get('palpacao/create/animal/{id}', 'PalpacaoController@create')->name('addPalpacao');
Route::post('palpacao/store', 'PalpacaoController@store')->name('storePalpacao');
Route::get('palpacao/listar/animal/{id}', 'PalpacaoController@show')->name('listarPalpacao');
Route::get('palpacao/listar/animal/palpacao/{id}', 'PalpacaoController@detalhe')->name('listarPalpacaoId');
Route::get('palpacao/listar/animal/palpacao/editar/{id}', 'PalpacaoController@edit')->name('editarPalpacao');
Route::put('palpacao/listar/animal/palpacao/atualizar/{id}', 'PalpacaoController@update')->name('updatePalpacao');
