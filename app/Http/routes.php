<?php

Route::get('/', function () {
    return view('auth/login');
});

Route::get('update/profile/photo', 'Home\HomeController@getUpdatePhoto');

Route::post('update/profile/photo', 'Home\HomeController@postUpdatePhoto');

Route::get('update/profile/contact_details', 'Home\HomeController@getUpdateProfile');

Route::post('update/profile/contact_details', 'Home\HomeController@postUpdateProfile');

Route::get('register/verify/{verificationToken}', [
    'as' => 'confirmation_path',
    'uses' => 'RegistrationController@confirm'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);

// Route::get('/login/{provider?}','Auth\AuthController@login');


// Route::get('/login/callback/{provider?}',[
//     'uses' => 'Auth\AuthController@getSocialAuthCallback',
//     'as'   => 'auth.getSocialAuthCallback'
// ]);