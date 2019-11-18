<?php


//  Home
Route::get('/','TodosController@index');


//  Other Routes
Route::resource('todo','TodosController');

 
