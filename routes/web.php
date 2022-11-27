<?php
Route::delete('produtos/{id}', 'ProdutoController@destroy')->name('produtos.destroy');
Route::put('produtos/{id}', 'ProdutoController@update')->name('produtos.update');
Route::get('produtos/{id}/edit', 'ProdutoController@edit')->name('produtos.edit');
Route::get('produtos/create', 'ProdutoController@create')->name('produtos.create');
Route::get('produtos/{id}', 'ProdutoController@show')->name('produtos.show');
Route::get('produtos', 'ProdutoController@index')->name('produtos.index');
Route::post('produtos', 'ProdutoController@store')->name('produtos.store');

//Empresas
Route::get('empresas', 'EmpresaController@index')->name('empresa.index');
Route::get('empresas/create', 'EmpresaController@create')->name('empresa.create');
Route::post('empresa', 'EmpresaController@store')->name('empresa.store');
Route::get('empresas/{id}', 'EmpresaController@show')->name('empresa.show');
Route::put('empresa/{id}', 'ProdutoController@update')->name('empresa.update');
Route::get('/', function () {
    return view('welcome');
})->name('empresa.home');
//rota any > todos os tipo de requisição
/*Route::any('/any', function () {
    return ('Any');
});
//rota match > defina quais tipos de requisição podem ser passados
Route::match(['post', 'get' ], '/match', function() {
    return ('match');
});

Route::get('/categorias/{flag}', function ($flag){
    return("Categoria: {$flag}");
});
//parametros opcionais
Route::get('/produtos/{idProduto?}', function ($idProduto = ''){
    return("Produtos {$idProduto}");
});
//redirect op1
Route::get('/redirect', function () {
    return redirect()->route('nome.rota');
});
//redirect op2
Route::redirect('/redirect1', '/produtos');
//nome para rotas 
Route::get('/nomeseses-rotas', function (){
    return("oi");
})->name('nome.rota');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
