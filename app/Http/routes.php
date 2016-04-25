<?php
Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('cars/{car?}', 'CarController@show');
//Route::get('cars/{car}', 'CarController@show'); -- static parameter
Route::get('car', 'CarController@show2');
Route::get('carshow3/{page?}','CarController@show3'); //optional parameter
Route::get('carshow4','CarController@listcar');
Route::get('carshow5', 'CarController@insert' );
Route::get('carshow6', 'CarController@insert2' );