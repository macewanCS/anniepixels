<?php

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/users', function()
{
  $user = new User;
  $user->username = 'harvardGuy';
  $user->email = 'mahemail2@aplace.com';
  $user->password = Hash::make('password');
  $user->save();
  return DB::table('users')->get();
  
});
