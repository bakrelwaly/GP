<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('test', function(){
    return view('Parent.index');
});
Route::get('edit', function(){
    return view('Parent.edit');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('invoice', function(){
    return view('invoice');
});


Route::get('{path}',"HomeController@index")->where( 'path', '([A-z\d-\/_.]+)?' );
