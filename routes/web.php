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

Route::get('/', 'HomeController@site')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/site/servicos/', 'ServicoController@index')->name('servicos');
Route::get('/site/servico/{id}', 'ServicoController@show')->name('servico');
Route::get('/site/servicos/novo', 'ServicoController@create')->name('novo_servico');
Route::post('/site/servicos/gravar', 'ServicoController@store')->name('gravar_servico');
Route::post('/site/servicos/alterar', 'ServicoController@update')->name('alterar_servico');
Route::post('/site/servicos/excluir', 'ServicoController@destroy')->name('excluir_servico');

Route::get('/sites', 'SiteController@index')->name('sites');
Route::get('/site/{id}', 'SiteController@show')->name('site');
Route::get('/sites/novo', 'SiteController@create')->name('novo_site');
Route::post('/sites/gravar', 'SiteController@store')->name('gravar_site');
Route::post('/sites/alterar', 'SiteController@update')->name('alterar_site');

Route::post('/sites/ativar'  , 'SiteController@active')->name('ativar_site');
Route::post('/sites/editar'  , 'SiteController@toEdit')->name('editar_site');

Route::post('/contato/novo/'  , 'EmailController@store')->name('novo_contato');