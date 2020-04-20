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
    return view('index');
});

Route::get('/produtos', 'ProdutosController@index');

Route::get('/categorias', 'CategoriasController@index');
Route::get('/categorias/novo', 'CategoriasController@create');
Route::post('/categorias', 'CategoriasController@store');
Route::get('/categorias/deletar/{id}', 'CategoriasController@destroy');
