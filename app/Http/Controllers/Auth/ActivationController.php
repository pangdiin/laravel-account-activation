<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\ActivationToken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivationController extends Controller
{
    public function activate(ActivationToken $token)
    {
    	$token->user()->update([
    		'active'	=>	true,
    	]);

    	$token->delete();

    	Auth::login($token->user); //login the user 

    	return redirect('/home');
    }

    public function resend(Request $request)
    {

    }
}
