<?php

// Route::get('contact', 'Suizide\Contact\Http\Controllers\ContactController@index')->name('contact');
// Route::post('contact', 'Suizide\Contact\Http\Controllers\ContactController@store');

Route::resource('contact', \Suizide\Contact\Http\Controllers\ContactController::class);
