<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sellers;
use Illuminate\Support\Facades\Hash;


class SellerRegisetrController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'phno' => 'required',
            
        ]);

        sellers::create([
            'phno' => $request->phno,
            
        ]);

        $credentials = $request->only('phno');
      return redirect()->to('/sellercentre/welcome');
        
       
    }
}
