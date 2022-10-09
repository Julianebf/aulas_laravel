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
    return view('welcome');
});

Route::get('/teste','Main@index');

Route::get('/user','Main@user');

Route::view('/pagina','pagina');

Route::view('/pagina1','pagina1');

// Route::view('/pagina2','pagina2',['nome' => 'Juliane Bezerra']);

Route::get('/pagina2','Main@mostrarNome');