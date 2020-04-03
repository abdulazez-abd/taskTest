<?php



Route::get('/','TaskController@index'); 

Route::get('task/{id}','TaskController@show');

Route::post('store','TaskController@store');

Route::delete('delete/{id}','TaskController@destroy');

Route::post('update/{id}?','TaskController@update');