<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Booking::with('products')->get();
      
       return view('admin.book_order.index' , compact('product'));
    }


    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        $product = Booking::find($id);

        return view('admin.book_order.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();

        $product = Booking::find($id);

         $product->update($input);

         return redirect('/admin/order');
    }

   
    public function destroy(string $id)
    {
        
    }
}
