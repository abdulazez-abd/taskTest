<?php

Route::get('/',function (){
    return view('child');
});

Route::get('tsaks','TaskController@index'); 

Route::get('task/{id}','TaskController@show');