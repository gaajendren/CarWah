<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Review;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
 
    public function index()
    {
        $id = auth()->user()->id;
        $data = Booking::where('user_id', $id)->get();
         $review = Review::all();
        return view('booking_list', compact('data' ,'review'));
    }

    
    public function book($pid)
    {
        $id = $pid; 
        $book =  Booking::all();
        return view('booking', compact('id', 'book'));
    
    }



    public function checktime(Request $request, $id)
{
    $selectedDate = $request->input('date');
    $bookings = Booking::where('date', $selectedDate)->get(['time', 'duration'])->toArray();
    $product = Product::where('id', $id)->value('duration');

   

    if ($product == '') {
        $allTimeSlots = ['09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00'];

        return response()->json(['availableTimeSlots' => $allTimeSlots]);
    }

    $allTimeSlots = ['09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00'];


    $availableTimeSlots = [];
    $occupiedSlots = [];

    foreach ($bookings as $booking){
        $startTime = $booking['time'];
        $duration = $booking['duration'];

        $startTimeInMinutes = Carbon::parse($startTime)->hour * 60 + Carbon::parse($startTime)->minute;

        for ($i=0; $i < $duration; $i++) { 
            $occupiedTimeInMinutes = $startTimeInMinutes + $i * 30;
            $occupiedSlots[] = Carbon::createFromTime(floor($occupiedTimeInMinutes / 60), $occupiedTimeInMinutes % 60)->format('H:i');
        }

    }

    $occupiedSlots = array_unique($occupiedSlots);

    $availableTimeSlots = array_diff($allTimeSlots, $occupiedSlots);

    

    return response()->json(['availableTimeSlots' => $availableTimeSlots]);
}


   
    public function store(Request $request , string $id)
    {
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        $input['product_id'] = $id;   
        $product = Product::where('id', $id)->value('duration');
        if($product){
            $input['duration'] = $product;
        }
        Booking::create($input);
        return redirect('dashboard')->with('flash_message', 'Booking Succeefull!');  
    }

   

    public function show(Booking $booking, string $id)
    {
        $data = Booking::find($id);
        
        return view('admin.book_order.show',compact ('data'));
        
    }

   
    public function edit(Booking $booking)
    {
       
    }

  
    public function update(Request $request, Booking $booking)
    {
        
    }

   
    public function destroy(Booking $booking , string $id)
    {
        Booking::find($id)->delete();

        return redirect('/admin/order')->with('success', 'Product deleted successfully.');
    }
}
