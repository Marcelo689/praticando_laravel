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

Route::get('/','PaginaPrincipalController@index')->name('site.principal');
Route::get('/site','ProjetoController@index')->name('site.index');
Route::get('/site/create/','ProjetoController@create')->name('site.create');
Route::post('/site/create/','ProjetoController@create')->name('site.create');
Route::get('/site/edit/{id}','ProjetoController@edit')->name('site.edit');
//Route::post('/site/edit/{id}','PhpController@edit')->name('site.edit');

Route::put('/site/edit/{id}','ProjetoController@edit')->name('site.edit');
Route::get('/site/excluir/{id}','ProjetoController@excluir')->name('site.excluir');
Route::get('/java',function(){
    echo "java";
})->name('java.index');
Route::get('/csharp',function(){
   echo "C#";
})->name('csharp.index');
