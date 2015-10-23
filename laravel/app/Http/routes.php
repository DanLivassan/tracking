<?php



Route::get('/', function () {
	session(['message'=>'opa','message_type'=>'success_msg']);
    return view('home.home',['title'=>'Faciliti - Desenvolvimento de Sistemas']);
});

Route::get('/app',['middleware'=>'auth', function () {
	
    return view('app.index',['title'=>'Faciliti - Tracking','avatar'=>'avatar']);
}]);



Route::get('/home', function () {
	session(['message'=>'opa','message_type'=>'success_msg']);
    return view('home.home',['title'=>'Faciliti - Desenvolvimento de Sistemas']);
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');