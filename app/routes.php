<?php

# Home
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

// Registration Controller
Route::get('register', 'RegistrationController@create')->before('guest');
Route::post('register', ['as' => 'registration.store', 'uses' =>'RegistrationController@store' ]);

# Authentication
Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController', ['only' =>  ['create', 'destroy', 'store']]);

# Task Controllers - could probably be tidied up as above.
Route::resource('tasks', 'TasksController');


//// Test profile page for testing Auth
//Route::get('profile', function()
//{
//    return "Welcome. Your email address is" . Auth::user()->email;
//})->before('auth'); // the before filter ensure we test auth access

// this line was the start of the app which made the home page action the TaskController index / not need now
//Route::get('/', ['as' => 'home', 'uses' => 'TasksController@index'])->before('auth'); // the before filter ensure we test auth access


