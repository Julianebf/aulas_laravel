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


Route::get('/teste','Main@index');

Route::get('/user','Main@user');

Route::view('/pagina','pagina');

Route::view('/pagina1','pagina1');

Route::get('/', 'Main1@home');

// Route::view('/pagina2','pagina2',['nome' => 'Juliane Bezerra']);

Route::get('/pagina2','Main@mostrarNome');

Route::get('/user/{nome}/{idade}/{apelido?}', function ($nome, $idade, $apelido = ''){
    echo "Nome: $nome $apelido Idade: $idade";
});

Route::get('/user/{nome}/{apelido}', function ($nome){
    echo "Nome: $nome";
});

Route::get('/user/{nome}/{apelido}','Main@user');

Route::get('/nome/{nome}/{idade}/{apelido?}','Main@nome');

Route::get('/home', 'Main@home')->name('inicio');
Route::get('/servicos', 'Main@servicos')->name('servicos');
Route::get('/contatos', 'Main@contatos')->name('contatos');


Route::get('clientes','Cliente@index');
Route::get('clientes_nomes','Cliente@nomes');

Route::get('produtos','Stock\Produtos@index');

Route::get('dados/{a}','Stats');

Route::get('cliente/{index}', 'Clientes@cliente');


Route::get('cliente/{index}', 'Clientes@cliente');

Route::get('client/{index?}','Clientes1@client');

Route::get('clients/{dado}/{index?}','Clientes2@clients');

Route::resource('produto', 'Produtos'); 

Route::view('ver', 'pagina');

Route::view('ver1', 'clientes.cliente');

Route::get('ver3', 'Clientes3@pagina');

Route::get('ver4', 'Main2@homepage');

Route::get('ver5', 'Main3@home');

Route::get('/endereco_teste', 'Main3@teste')->name('minha_route');


Route::get('ver6', 'Main3@home');

Route::get('ver7', 'Main5@home3');

Route::get('ver8', 'Main6@home4');


