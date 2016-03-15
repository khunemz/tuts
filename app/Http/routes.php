<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Resolver
App::bind('App\IUserRepository', 'App\UserRepository');
App::bind('App\IArticleRepository', 'App\ArticleRepository');

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    /* =========== Article ========== */
    Route::resource('articles', 'ArticleController');

    /* ============= User ============ */
    Route::get('users/{users}', [
        'uses' => 'UserController@index',
        'as' => 'users.index',
        'middleware' => 'user'
    ]);

    Route::get('users/create', [
        'uses' => 'UserController@create',
        'as' => 'users.create'
    ]);

    Route::get('users/getsignin', [
        'uses' => 'UserController@getsignin',
        'as' => 'users.getsignin'
    ]);

    Route::post('users/signin', [
        'uses' => 'UserController@signin',
        'as' => 'users.signin',
        'middleware' => 'user'
    ]);

    Route::post('users', [
        'uses' => 'UserController@store',
        'as' => 'users.store',
        'middleware' => 'user'
    ]);

    Route::get('users/{users}/edit', [
        'uses' => 'UserController@edit',
        'as' => 'users.edit',
        'middleware' => 'user'
    ]);

    Route::patch('users/{users}', [
        'uses' => 'UserController@update',
        'as' => 'users.update',
        'middleware' => 'user'
    ]);

    Route::get('signout', [
        'uses' => 'UserController@signout',
        'as' => 'signout',
        'middleware' => 'user'
    ]);

    Route::delete('users/{users}', [
        'uses' => 'UserController@destroy',
        'as' => 'users.destroy',
        'middleware' => 'user'
    ]);
});
