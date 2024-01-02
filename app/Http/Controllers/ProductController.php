<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Vechicle;
use Illuminate\Http\Request;

class ProductController extends Controller
{
 
    public function index()
    {
        $product = Product::all();
        $vechicle = Vechicle::all();
        return view('admin.product.index', compact('product', 'vechicle'));
    }




    public function create()
    {
        $vechicle = Vechicle::all();
        return view('admin.product.create', compact('vechicle'));
    }


    public function store(Request $request)
    {
        $input = $request->all();
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('product_images', 'public');
        }
        $input['img'] = $imagePath;
        Product::create($input);
        return redirect('admin/product')->with('flash_message', 'Product Addedd!');  
    }

 
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        $product = Product::find($id);
        $vechicle = Vechicle::all();
        $v1 = Vechicle::find($product->vechicle_id);
        return view('admin.product.edit',compact ('product', 'vechicle' , 'v1'))->with('product', $product);
    }

 
    public function update(Request $request, string $id)
    {
        $input = $request->all();
        $product = Product::find($id);
       
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('product_images', 'public');
            $input['img'] = $imagePath;
        }
      
        $product->update($input);
        
        return redirect('admin/product')->with('flash_message', 'Product Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
