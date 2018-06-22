<?php


Auth::routes();

Route::get('/', 'HomeController@home');




Route::get('/about', 'HomeController@about');

Route::get('/contact-us', 'HomeController@contact');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'DashboardController@index');
    //  this route is commented until we integrate forntend with backend
    // below you will find an uncommented one for prototyping
    // Route::get('/meeting/{id}', 'DashboardController@ongoingMeeting');
    Route::get('/meeting', 'DashboardController@ongoingMeeting');

});
