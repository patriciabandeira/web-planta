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

Route::redirect('/', 'admin');

Route::group(['prefix' => 'admin'], function () {
	Auth::routes();
	Route::get('/', 'HomeController@index')->name('home.index.get');

	Route::group(['prefix' => 'planta', 'as' => 'planta.'], function () {
		Route::get('/', ['as' => 'index.get', 'uses' => 'PlantaController@index']);
		Route::get('/{id}', ['as' => 'find_by_id.get', 'uses' => 'PlantaController@viewGet'])->where('id', '\d+');
		
		Route::get('/add', ['as' => 'add.get', 'uses' => 'PlantaController@addGet']);
		Route::post('/add', ['as' => 'add.post', 'uses' => 'PlantaController@addPost']);

		Route::delete('/del/{id}', ['as' => 'delete', 'uses' => 'PlantaController@delete'])->where('id', '\d+');

		Route::get('/{id}/imagens', ['as' => 'imagens.get', 'uses' => 'PlantaController@imagensGet'])->where('id', '\d+');
		Route::get('/{id}/biomas', ['as' => 'biomas.get', 'uses' => 'PlantaController@biomasGet'])->where('id', '\d+');
		Route::get('/{id}/full', ['as' => 'full.get', 'uses' => 'PlantaController@plantaFullGet'])->where('id', '\d+');
	});

	// Route::group(['prefix' => 'api', 'as' => 'api.'], function () {
	// 	Route::group(['prefix' => 'imagem', 'as' => 'imagem.'], function () {
	// 		Route::get('/', ['as' => 'index.get', 'uses' => 'PlantaController@index']);
	// 		Route::get('/{id}', ['as' => 'find_by_id.get', 'uses' => 'PlantaController@findById'])->where('id', '\d+');		
	// 	});
	// });	
});
