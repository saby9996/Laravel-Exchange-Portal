<?php

Route::get('/', function () {
    return view('auth/login');
});

Route::get('register/verify/{verificationToken}', [
    'as' => 'confirmation_path',
    'uses' => 'RegistrationController@confirm'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);

Route::get('update/profile/contact', 'User\ProfileController@getUpdateContactDetails');

Route::post('update/profile/contact', 'User\ProfileController@postUpdateContactDetails');

Route::get('update/profile/photo', 'User\ProfileController@getUpdatePhoto');

Route::post('update/profile/photo', 'User\ProfileController@postUpdatePhoto');

Route::resource('items', 'ItemsController');

// Route::get('/login/{provider?}','Auth\AuthController@login');


// Route::get('/login/callback/{provider?}',[
//     'uses' => 'Auth\AuthController@getSocialAuthCallback',
//     'as'   => 'auth.getSocialAuthCallback'
// ]);