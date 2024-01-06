<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
   
    public function index()
    {
      
    }

    
    public function create()
    {
       
    }

    
    public function store(Request $request , string $id , string $book_id)
    {
        $input = $request->all();

        $user_id = auth()->user()->id;

        $input['product_id'] = $id;
        $input['user_id'] = $user_id;
        $input['booking_id'] = $book_id;

        Review::create($input);

        return redirect('/booking');
    }

    
    public function show(Review $review)
    {
        
    }

    
    public function edit(Review $review)
    {
        
    }

   
    public function update(Request $request, Review $review)
    {
        
    }

   
    public function destroy(Review $review)
    {
       
    }
}
