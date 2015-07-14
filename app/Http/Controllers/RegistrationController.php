<?php

namespace Swapstr\Http\Controllers;

use Illuminate\Http\Request;

use Swapstr\User;
use Exception;

use Swapstr\Http\Requests;
use Swapstr\Http\Controllers\Controller;

class RegistrationController extends Controller
{

    public function confirm($verification_token)
    {
    	if( ! $verification_token)
        {
            throw new Exception("Invalid Confirmation Code", 1);
        }

        $user = User::where('verification_token', '=', $verification_token)->first();

        if(!$user) {
        	throw new Exception("Invalid Confirmation Code", 1);
            
        }

        $user->status = 'active';
        $user->verification_token = null;
        $user->save();

        Flash::overlay('You have successfully verified your account.', 'Congratulations');

        return redirect('auth.login');
    }
}
