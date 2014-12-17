<?php

Route::when('*', 'csrf', array('post', 'put', 'delete'));

Route::get('/', 'PagesController@index');
Route::get('/story','PagesController@story');
Route::get('/catering','PagesController@catering');
Route::get('/giftcard','PagesController@giftcard');
Route::get('/club','PagesController@club');
Route::get('/contact-us','PagesController@contactus');
Route::get('/app','PagesController@app');
Route::get('/press-media','PagesController@pressMedia');
Route::get('/franchise','PagesController@franchise');
Route::post('/comments','PagesController@comments');
Route::get('/employment','PagesController@employment');
Route::post('/employment','PagesController@postEmployment');
Route::get('/gallery','GalleryController@getAll');

Route::get('/our-news','NewsController@getAllNews');
Route::get('/our-news/{id}', 'NewsController@getNews');
Route::get('/our-news/json', 'NewsController@calendar');

Route::get('/our-blog','BlogController@getAllBlogs');
Route::get('/our-blog/{id}', 'BlogController@getBlog');

Route::get('/menu/{type?}','MenuController@menuType');



Route::get('/webadmin',['before'=>'alreadyLoggedIn','uses'=>'AuthController@authenticate']);
Route::post('/webadmin',[
    'as' => 'login.process',
    'uses' => 'AuthController@postAuthenticate'
]);

Route::get('/webadmin/forgot-password',['before'=>'alreadyLoggedIn','uses'=>'AuthController@forgotPassword']);
Route::post('/webadmin/forgot-password',[
    'as' => 'login.forgotPassword',
    'uses' => 'AuthController@postForgotPassword'
]);

Route::get('/webadmin/reset-password/{userId}/{resetCode}',['before'=>'alreadyLoggedIn','uses'=>'AuthController@resetPassword']);
Route::post('/webadmin/reset-password/{userId}/{resetCode}','AuthController@postResetPassword');

Route::group(['prefix'=>'webadmin','before'=>'isLoggedIn'], function()
{
    Route::get('dashboard', 'PagesController@dashboard');

    Route::resource('news', 'NewsController');
    Route::resource('blog', 'BlogController');
    Route::group(['before'=>'isAdmin'], function(){
        Route::resource('users', 'UsersController');
        Route::resource('menu', 'MenuController');
        Route::resource('category', 'MenuCategoriesController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('comments', 'CommentsController');

        Route::post('users/passEdit/{id}', 'UsersController@updatePassword');
    });

    Route::get('logout','AuthController@logout');

});


Route::get('groups', function()
{
   $groups = Sentry::findAllGroups();
    foreach($groups as $group)
    {
        echo $group['name'];
    }
});