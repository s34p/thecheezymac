<?php

Route::when('*', 'csrf', array('post', 'put', 'delete'));

Route::get('/', 'PagesController@index');
Route::get('/story','PagesController@story');
Route::get('/menu','PagesController@menu');
Route::get('/specials','PagesController@specials');
Route::get('/news','NewsController@getAllNews');
Route::get('/catering','PagesController@catering');
Route::get('/giftcard','PagesController@giftcard');
Route::get('/club','PagesController@club');
Route::get('/contact-us','PagesController@contactus');
Route::get('/app','PagesController@app');
Route::get('/press-media','PagesController@pressMedia');
Route::get('/franchise','PagesController@franchise');
Route::get('/comments','PagesController@comments');

Route::get('/webadmin','AuthController@authenticate');
Route::post('/webadmin',[
    'as' => 'login.process',
    'uses' => 'AuthController@postAuthenticate'
]);

Route::group(['prefix'=>'webadmin','before'=>'isLoggedIn'], function()
{
    Route::get('dashboard', 'PagesController@dashboard');

    Route::resource('news', 'NewsController');
    Route::resource('users', 'UsersController');

    Route::post('users/passEdit/{id}', 'UsersController@updatePassword');
    Route::get('logout','AuthController@logout');

});