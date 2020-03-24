<?php
// mvc route
// controlerName@methodname
Route::get('/persons', 'PersonController@index'); 
Route::post('/persons', 'PersonController@store'); 
Route::get('/persons/create', 'PersonController@create');
Route::get('/persons/{id}/edit', 'PersonController@edit');
Route::post('/persons/{id}/edit', 'PersonController@update');

