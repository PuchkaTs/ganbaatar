<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', [
    'as'   => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('policy/{id}', [
    'as'   => 'policy_path',
    'uses' => 'PagesController@policy'
]);


Route::get('/contact_us', [
    'as'   => 'contact_path',
    'uses' => 'ContactsController@contact'
]);

Route::get('/news', [
    'as'   => 'news_path',
    'uses' => 'PagesController@show_news'
]);
Route::get('/news/{id}', [
    'as'   => 'news_path',
    'uses' => 'PagesController@show_news_by_id'
]);

Route::get('/career', [
    'as'   => 'career_path',
    'uses' => 'PagesController@career'
]);
Route::get('/ask', [
    'as'   => 'career_path',
    'uses' => 'ContactsController@create'
]);
Route::post('/ask', [
    'as'   => 'contact_path',
    'uses' => 'ContactsController@store'
]);
/**
 * Sessions
 */
Route::get('login', [
    'as'   => 'login_path',
    'uses' => 'SessionController@create'
]);
Route::post('login', [
    'as'   => 'login_path',
    'uses' => 'SessionController@store'
]);
Route::get('logout', [
    'as'   => 'logout_path',
    'uses' => 'SessionController@destroy'
]);

/**
 * Super Admin
 */
Route::get('ncst', [
    'as'   => 'ncst_path',
    'uses' => 'UsersController@ncst'
]);
Route::post('ncst', [
    'as'   => 'ncst_path',
    'uses' => 'UsersController@ncst_store'
]);