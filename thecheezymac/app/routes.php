<?php

Route::when('*', 'csrf', array('post', 'put', 'delete'));

Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');
//Route::get('/story','PagesController@story');
//Route::get('/catering','PagesController@catering');
Route::get('/social-network/{type}','PagesController@socialNetwork');
//Route::get('/giftcard','PagesController@giftcard');
//Route::get('/club','PagesController@club');
//Route::get('/contact-us','PagesController@contactus');
//Route::get('/app','PagesController@app');
//Route::get('/press-media','PagesController@pressMedia');
//Route::get('/franchise','PagesController@franchise');
Route::post('/comments','PagesController@comments');
//Route::get('/employment','PagesController@employment');
Route::post('/employment','PagesController@postEmployment');
Route::get('/gallery','GalleryController@getAll');
Route::get('/winners','WinnersController@getWinners');
Route::get('/merchandise','MerchandiseController@getMerchandise');

Route::get('/our-news','NewsController@getAllNews');
Route::get('/our-news/{id}', 'NewsController@getNews');
Route::get('/our-news/json', 'NewsController@calendar');

Route::get('/our-blog','BlogController@getAllBlogs');
Route::get('/our-blog/{id}', 'BlogController@getBlog');

Route::get('/menu/{type?}','MenuController@menuType');


Route::post('/newsletter',[
    'as' => 'newsletter.subscribe',
    'uses' => 'NewsLetterController@subscribe'
]);

Route::post('/franchise',[
    'as' => 'franchise.join',
    'uses' => 'PagesController@postFranchise'
]);



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
        Route::resource('winners', 'WinnersController');
        Route::resource('pages', 'PagesController');
        Route::resource('merchandise', 'MerchandiseController');
        Route::resource('menuFile', 'MenuFileController');
        Route::get('settings', 'SettingsController@index');
        Route::get('settings/database-backup', 'SettingsController@DbBackup');
        Route::get('settings/performance', 'SettingsController@performance');

        Route::post('users/passEdit/{id}', 'UsersController@updatePassword');
    });



    Route::get('newsletter','NewsLetterController@send');
    Route::post('newsletter','NewsLetterController@postSend');


    Route::get('logout','AuthController@logout');

});

Route::get('env', function()
{
    return App::environment();
});
Route::get('db', function()
{
//    if(Dbbackup::backup() == true)
//    {
//        return "Success";
//    }
//    return "Error";
    dd(Config::get("Dbbackup::DbMysqlDumpPath"));
});

Route::get('/{pageSlug}','PagesController@dynamicPages');


