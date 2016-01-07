<?php

Route::group([
    'namespace' => 'Solarcms\Dashboard\Controllers',
    'prefix' =>'solar/dashboard',
    'as' => 'Solar.Dashboard::',
    'middleware' => 'auth'], function() {

    Route::get('/', ['as' => 'index', 'uses' => 'DashboardController@index']);

});