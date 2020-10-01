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

Auth::routes(); // Rota criada automaticamente com a criação do auth pelo cmd

Route::get('/home', 'HomeController@index')->name('home'); // Rota criada automaticamente com a criação do auth pelo cmd

Route::get('/produtos', 'ProdutoControlador@index') // Rota chama o index com os produtos
    ->name('produtos');
    //->middleware('auth') -- // Outra forma de proteger a rota sem utilizar o construct do controlador

Route::get('/departamentos', 'DepartamentoControlador@index');

Route::get('/usuario', function(){
    return view('usuario');
});
    
