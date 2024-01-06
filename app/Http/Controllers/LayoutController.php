<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\Product;
use App\Models\Review;
use App\Models\Vechicle;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    function about(){
        if (auth()->user()->role != 0) {
        
            return $this->redirectToRole(auth()->user()->role);
        }

        return view('about_main');
    }
    function service(){
        if (auth()->user()->role != 0) {
        
            return $this->redirectToRole(auth()->user()->role);
        }

        $product = Product::all();
        $data1 = Review::all(); 
        $data = Vechicle::all();
        return view('service',compact('product', 'data' ,'data1'));
    }

    function getProductsByVehicle($id)
    {
        $data1 = Review::all(); 
        $data = Vechicle::all();
        $product = Product::where('vechicle_id' , $id)->get();
        return view('service', compact('product','data', 'data1'));
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
