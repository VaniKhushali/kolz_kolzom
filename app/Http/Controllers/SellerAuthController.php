<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerAuthController extends Controller
{
     protected function guard()
    {
        return Auth::guard('seller');
    }

    protected function redirectTo()
    {
        return '/'; // Redirect path after successful login
    }
}
