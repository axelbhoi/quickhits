<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('dogs', 'DogsController');

Route::resource('authors','AuthorsController');

