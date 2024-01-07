<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Review;
use Carbon\Carbon;
use App\Models\Booking;
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

        $product = Product::all();
        $book = Booking::all();
        $review = Review::all();

        $order = Booking::where('status', 'Pending')->get();
        $order1 = Booking::where('status', 'Settle')->get();
        $setOrder = count($order1);

        $penOrder = count($order);
        $bookings = Booking::where('status', 'Settle')->with('products')->get();

        $bSum = 0;
        
        foreach ($bookings as $booking) {
            $bSum += $booking->products->price;
        }

        $priceSum = Booking::with('products')->get();

        $total_sum = 0;

        foreach ($priceSum as $booking) {
            $total_sum += $booking->products->price;
        }

        $rating = Review::sum('rate');
        $t_book = count($book);
        $total_p = count($product);

        // pass the cart


        // Get bookings grouped by month and sum of prices for each month
        $monthlyData = Booking::where('status', 'Settle')
            ->with('products')
            ->orderBy('created_at', 'asc')
            ->get()    
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('F Y');
            })
            ->map(function ($group) {
                return $group->sum('products.price');
            });

        // Prepare data for the chart
        $labels = $monthlyData->keys();
        $values = $monthlyData->values();


        return view('admin.index' , compact('product', 'book', 'review' ,'setOrder','rating','total_p' , 't_book' , 'total_sum' , 'bSum' ,'penOrder' ,'labels' , 'values'));
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
