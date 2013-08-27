<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('home','MainController@home');

