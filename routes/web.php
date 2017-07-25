<?php
//seldva 18

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/threads', 'ThreadsController@index');


Route::get('/threads/create', 'ThreadsController@create');
Route::get('/threads/{chanel}/{thread}', 'ThreadsController@show');
Route::post('threads', 'ThreadsController@store');


Route::get('/threads/{channel}', 'ThreadsController@index');
Route::post('/threads/{chanel}/{thread}/replies', 'RepliesController@store');

