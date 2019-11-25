<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/produtos','ProdutoController@index');



// Route::namespace('Api')->name('api.')->group(function()
// {
//     // Route::prefix('produtos',function(){
//     //     Route::get('/','ProdutoController@index');
        
//     // })->name('produtos');
    
// });
Route::prefix('produtos')->namespace('API')->name('produto.')->group(function(){
    Route::get('','ProdutoController@index')->name('list');
    Route::get('/{id}','ProdutoController@single')->name('get');;
    Route::post('','ProdutoController@store')->name('store'); 
    Route::put('{id}','ProdutoController@update')->name('update'); 
    Route::delete('/{id}','ProdutoController@destroy')->name('destroy');
});

Route::prefix('categorias')->namespace('API')->name('categoria.')->group(function(){
    Route::get('','CategoriaController@index');
    Route::get('/{id}','CategoriaController@single')->name('get');;
    Route::post('','CategoriaController@store')->name('store'); 
    Route::put('{id}','CategoriaController@update')->name('update'); 
    Route::delete('/{id}','CategoriaController@destroy')->name('destroy');
});