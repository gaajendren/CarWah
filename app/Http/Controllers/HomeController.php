<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->role != 0) {
        
            return $this->redirectToRole(auth()->user()->role);
        }
                
        return view ('dashboard'); 
    }

    public function adminHome()
    {
     
        if (auth()->user()->role != 1) {
         
            return $this->redirectToRole(auth()->user()->role);
        }

        return view('admin.index');
    }

    private function redirectToRole($role)
    {
        switch ($role) {
            case 1:
                return redirect()->route('admin.index');
            case 0:
                return redirect()->route('dashboard');
        }
    }

}
