<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class Logout extends Controller
{

    public function logout()
    {
        Auth::guard('web')->logout();
    
        
        return redirect('/login');
    }

}
