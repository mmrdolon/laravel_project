<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::model('voters', 'Voter');
Route::model('candidates', 'Candidate');

Route::bind('voters', function($value, $route) {
	return App\Task::whereId($value)->first();
});
Route::bind('candidates', function($value, $route) {
	return App\Project::whereId($value)->first();
});

Route::resource('candidates', 'CandidatesController');
Route::resource('candidates.voters', 'VotersController');