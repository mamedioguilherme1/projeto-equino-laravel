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

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('client', 'ClientController');
    Route::resource('animal', 'AnimalController');
    
    Route::get('palpacao/animal/create/{id}', 'PalpacaoController@create')->name('addPalpacao');
    Route::post('palpacao/animal/store', 'PalpacaoController@store')->name('storePalpacao');
    Route::get('palpacao/animal/listar/{id}', 'PalpacaoController@show')->name('listarPalpacao');
    Route::get('palpacao/animal/editar/{id}', 'PalpacaoController@edit')->name('editarPalpacao');
    Route::put('palpacao/animal/atualizar/{id}', 'PalpacaoController@update')->name('updatePalpacao');
    
    Route::get('buscar/animal', 'BuscarController@showAnimal')->name('buscarAnimal');
    Route::get('buscar/client', 'BuscarController@showClient')->name('buscarClient');
      
});