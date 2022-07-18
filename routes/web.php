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

//HOME
Route::get('/', function () {
    return view('site.home');
})->name('site.home');

//MENU
Route::get('/menu', function () {
    return view('welcome');
})->name('site.menu');

//CONTEÚDO
Route::get('/conteudo', function () {
    return view('welcome');
})->name('site.conteudo');

//RODAPÉ
Route::get('/rodape', function () {
    return view('welcome');
})->name('site.rodape');

//ACESSIBILIDADE
Route::get('/acessibilidade', function () {
    return view('welcome');
})->name('site.acessibilidade');
