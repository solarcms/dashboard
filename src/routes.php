<?php

Route::group([
    'namespace' => 'Solarcms\Dashboard\Controllers',
    'prefix' =>'solar/dashboard',
    'as' => 'Solar.Dashboard::'], function() {

    Route::get('/', 'DashboardController@index');

});