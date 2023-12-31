<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerAuthController extends Controller
{
    protected function guard()
    {
        return Auth::guard('buyer');
    }

    protected function redirectTo()
    {
        return '/'; // Redirect path after successful login
    }
}
   