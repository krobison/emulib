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


Route::get('/', 'HomeController@showHome');

Route::get('invertNavbar', 'ThemeController@invertNavbar');
Route::get('uninvertNavbar', 'ThemeController@uninvertNavbar');
Route::get('theme{theme}', 'ThemeController@changeTheme');

Route::get('browse','LibraryController@browse');

Route::get('nes_library','LibraryController@showNes');
Route::get('nes_library_{show}','LibraryController@showNes');
Route::post('nes_filter_library_{show}','LibraryController@showNesFilter');

Route::get('nes/{id}','GameController@showNes');