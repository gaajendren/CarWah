<?php

namespace App\Http\Controllers;

use App\Models\Vechicle;
use Illuminate\Http\Request;

class VechicleController extends Controller
{
 
    public function index()
    {
        $product = Vechicle::all();
        return view('admin.vechicle.index',compact('product'));
    }

   
    public function create()
    {
        return view('admin.vechicle.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Vechicle::create($input);
        return redirect('/admin/vechicle')->with('flash_message', "Vechicle Added!");
    }



    public function edit(Vechicle $vechicle , $id)
    {
        $product = Vechicle::find($id);
       
        return view('admin.vechicle.edit', compact('product'));
    }

   
    public function update(Request $request, string $id)
    {
        $input = $request->all();
        $vechicle = Vechicle::find($id);

        $vechicle->update($input);

        return redirect('/admin/vechicle')->with('flash_message' , "Vechicle Updated!");

    }


    public function checkDuration(Request $request, $id) {
        
        $vechicle = Vechicle::where('id', $id)->value('isEstimate');  
        return response()->json($vechicle);

    }

    
    public function destroy(Vechicle $vechicle , string $id)
    {
        Vechicle::find($id)->delete();

        return redirect('admin/vechicle')->with('success', 'Vechicle deleted successfully.');
    }
}
