<?php

namespace App\Http\Controllers;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Review;
use Carbon\Carbon;
use App\Models\Booking;

class PdfController extends Controller
{
    

public function generatePdf()
{


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



    $pdf = SnappyPdf::loadView('admin.pdf', compact('product', 'book', 'review' ,'setOrder','rating','total_p' , 't_book' , 'total_sum' , 'bSum' ,'penOrder' ,'labels' , 'values' ));

    return $pdf->download('report.pdf');
}



}
