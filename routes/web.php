<?php

use Illuminate\Support\Facades\Route;

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
  return view('layoutes.master');
});

Route::prefix('sys')->group(function () {

  Route::prefix('/varian')->group(function () {
    Route::get('/', 'VarianController@index')->name('varianIndex');
    Route::get('/new', 'VarianController@new')->name('varianNew');
    Route::post('/insert', 'VarianController@insert')->name('varianInsert');
    Route::get('/edit/{id}', 'VarianController@edit')->name('varianEdit');
    Route::get('/update/{id}', 'VarianController@update')->name('varianUpdate');
    Route::get('/detail/{id}', 'VarianController@detail')->name('varianDetail');
    Route::get('/delete/{id}', 'VarianController@delete')->name('varianDelete');
  });

  Route::prefix('/satuan')->group(function () {
    Route::get('/', 'SatuanController@index')->name('satuanIndex');
    Route::get('/new', 'SatuanController@new')->name('satuanNew');
    Route::post('/insert', 'SatuanController@insert')->name('satuanInsert');
    Route::get('/edit/{id}', 'SatuanController@edit')->name('satuanEdit');
    Route::get('/update/{id}', 'SatuanController@update')->name('satuanUpdate');
    Route::get('/detail/{id}', 'SatuanController@detail')->name('satuanDetail');
    Route::get('/delete/{id}', 'SatuanController@delete')->name('satuanDelete');
  });

  Route::prefix('/merk')->group(function () {
    Route::get('/', 'MerkController@index')->name('merkIndex');
    Route::get('/new', 'MerkController@new')->name('merkNew');
    Route::post('/insert', 'MerkController@insert')->name('merkInsert');
    Route::get('/edit/{id}', 'MerkController@edit')->name('merkEdit');
    Route::get('/update/{id}', 'MerkController@update')->name('merkUpdate');
    Route::get('/detail/{id}', 'MerkController@detail')->name('merkDetail');
    Route::get('/delete/{id}', 'MerkController@delete')->name('merkDelete');
  });

  Route::prefix('/products')->group(function () {
    Route::get('/', 'ProductsController@index')->name('productIndex');
    Route::get('/new', 'ProductsController@new')->name('productNew');
    Route::post('/insert', 'ProductsController@insert')->name('productInsert');
    Route::get('/edit/{id}', 'ProductsController@edit')->name('productEdit');
    Route::get('/update/{id}', 'ProductsController@update')->name('productUpdate');
    Route::get('/detail/{id}', 'ProductsController@detail')->name('productDetail');
    Route::get('/delete/{id}', 'ProductsController@delete')->name('productDelete');
  });

  Route::prefix('/po')->group(function () {
    Route::get('/', 'PoController@index')->name('poIndex');
    Route::get('/new', 'PoController@new')->name('poNew');
    Route::post('/insert', 'PoController@insert')->name('poInsert');
    Route::get('/edit/{id}', 'PoController@edit')->name('poEdit');
    Route::get('/update/{id}', 'PoController@update')->name('poUpdate');
    Route::get('/detail/{id}', 'PoController@detail')->name('poDetail');
    Route::get('/delete/{id}', 'PoController@delete')->name('poDelete');
  });

  Route::prefix('/ro')->group(function () {
    Route::get('/', 'RoController@index')->name('roIndex');
    Route::get('/new', 'RoController@new')->name('roNew');
    Route::post('/insert', 'RoController@insert')->name('roInsert');
    Route::get('/edit/{id}', 'RoController@edit')->name('roEdit');
    Route::get('/update/{id}', 'RoController@update')->name('roUpdate');
    Route::get('/detail/{id}', 'RoController@detail')->name('roDetail');
    Route::get('/delete/{id}', 'RoController@delete')->name('roDelete');
    Route::post('/api-detail/{id}', 'RoController@getPoDetail')->name('apiPoDetail');
  });
});
