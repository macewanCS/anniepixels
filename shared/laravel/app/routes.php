<?php

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/users', function()
{
  //User::create([
  //  'username' => 'AnotherUser',
  //  'password' => Hash::make('1234')
  //]);

  //return User::all();

  return 'Users here?';

  
});
