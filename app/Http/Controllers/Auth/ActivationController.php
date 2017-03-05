<?php

namespace App\Http\Controllers\Auth;

use App\ActivationToken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivationController extends Controller
{
    public function activate(ActivationToken $token)
    {
    	dd($token);
    }

    public function resend(Request $request)
    {

    }
}
