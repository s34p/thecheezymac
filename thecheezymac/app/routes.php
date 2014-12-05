<?php

Route::get('/', 'PagesController@index');
Route::get('/story','PagesController@story');
Route::get('/menu','PagesController@menu');
Route::get('/specials','PagesController@specials');
Route::get('/blog','BlogController@index');
Route::get('/catering','PagesController@catering');
Route::get('/giftcard','PagesController@giftcard');
Route::get('/club','PagesController@club');
Route::get('/contact-us','PagesController@contactus');
