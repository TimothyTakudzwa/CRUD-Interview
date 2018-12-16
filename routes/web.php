<?php

Route::get('/', 'CreatesController@home');
Route::post('/create', 'CreatesController@save');
Route::get('/getresults', 'CreatesController@getresults');
Route::post('/updateuser', 'CreatesController@updateuser');
Route::post('/deleteuser', 'CreatesController@deleteuser');

