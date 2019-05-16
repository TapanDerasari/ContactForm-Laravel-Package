<?php

/**
 * Contact form package routes
 */

Route::get('contact', function () {
    return view('contactform::contact');
});

Route::group(['namespace' => 'Tapan\ContactForm\Http\Controllers', 'middleware' => ['web']], function () {
    Route::get('contact', 'ContactFormController@index');
    Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});