<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::any('/home', 'HomeController@dashboard')->name('home');
Route::any('settings', 'HomeController@settings')->name('settings');
Route::any('news_list', 'HomeController@news_list')->name('news_list');
Route::any('advertisement', 'HomeController@advertisement')->name('advertisement');


Route::any('basic_settings', 'HomeController@basic_settings')->name('basic_settings');

Route::any('uploadfile', 'HomeController@uploadfile');

Route::any('get_basic_settings', 'HomeController@get_basic_settings');


Route::any('add_news_list', 'HomeController@add_news_list');
Route::any('publish_news', 'HomeController@publish_news');
Route::any('get_live_news', 'HomeController@get_live_news');
Route::any('get_unpublished_news', 'HomeController@get_unpublished_news');
Route::any('get_removed_news', 'HomeController@get_removed_news');


Route::any('save_page_count', 'HomeController@save_page_count');
Route::any('get_page_count', 'HomeController@get_page_count');




 Route::any('logout', '\App\Http\Controllers\Auth\LoginController@logout'); 

