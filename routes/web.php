<?php



Route::get('/','TaskController@index'); 

Route::get('task/{id}','TaskController@show');

Route::post('store','TaskController@store');