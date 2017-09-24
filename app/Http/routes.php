<?php

Route::get('/', 'StaticPagesController@home');
Route::get('/help', 'StaticPagesController@help');
Route::get('/about', 'StaticPagesController@about');

Route::get('/', function () {
    return view('welcome');
});
