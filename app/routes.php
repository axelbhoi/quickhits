<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('home','MainController@home');

Route::get('contact','MainController@contact');

Route::post('send/email', 'MainController@email');
