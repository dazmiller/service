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
Route::get('test', 'HomeController@test');



// Logins
Route::get('login', 'LoginController@index');
Route::get('auth/login', 'LoginController@index');
Route::get('register', 'LoginController@create');





Route::controllers([
	//'auth' => 'Auth\AuthController',
	//'password' => 'Auth\PasswordController',
]);




Route::resource('questions', 'QuestionsController');
Route::resource('topics', 'TopicsController');

Route::get('train', 'QuizController@train');
Route::get('train/{topicName}/{questionNumber}', 'QuizController@show');
Route::post('train/{topicName}/{questionNumber}', 'QuizController@reply');
