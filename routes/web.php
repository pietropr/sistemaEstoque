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

//404
Route::get('/404', "Controller@erro404" );



/*
 * Produtos
 */
Route::post('/painel/produtos/store', "ProdutoController@store" );
Route::get('/painel/produtos/novo', "ProdutoController@create" );
Route::get('/painel/produtos/', "ProdutoController@index" );
Route::get('/painel/produtos/ver/{id}', "ProdutoController@show" );
Route::get('/painel/produtos/excluir/{id}', "ProdutoController@destroy" );


//Categorias
Route::get('/painel/categorias/', "CategoriaController@index");
Route::get('/painel/categorias/novo', "CategoriaController@create");
Route::get('/painel/categorias/ver/{id}', "CategoriaController@show");
Route::post('/painel/categorias/salvar', "CategoriaController@store");


View::composer('*', function ($view) {
    View::share('viewName', $view->getName());
});

Route::get('/', function () {
    return view('logar');
});

Route::get('/sair','LogarController@sair');

Route::post('/login', 'LogarController@login');
Route::get('/painel', function() {
    return view('painel.index');
});
