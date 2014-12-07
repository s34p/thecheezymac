<?php

Route::when('*', 'csrf', array('post', 'put', 'delete'));

Route::get('/', 'PagesController@index');
Route::get('/story','PagesController@story');
Route::get('/menu','PagesController@menu');
Route::get('/specials','PagesController@specials');
Route::get('/blog','BlogController@index');
Route::get('/catering','PagesController@catering');
Route::get('/giftcard','PagesController@giftcard');
Route::get('/club','PagesController@club');
Route::get('/contact-us','PagesController@contactus');

Route::get('/webadmin','AuthController@authenticate');
Route::post('/webadmin',[
    'as' => 'login.process',
    'uses' => 'AuthController@postAuthenticate'
]);

Route::group(['prefix'=>'webadmin'], function()
{
    Route::get('dashboard', 'PagesController@dashboard');

    Route::resource('news', 'NewsController');
    Route::resource('users', 'UsersController');

});