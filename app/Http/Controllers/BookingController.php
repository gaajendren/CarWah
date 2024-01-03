<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
 
    public function index()
    {
        $id = auth()->user()->id;
        $data = Booking::where('user_id', $id)->get();
        return view('booking_list', compact('data'));
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
        $bookedSlots = Booking::where('date', $selectedDate)->pluck('time')->toArray();
        $slotDuration = Product::where('id', $id)->value('duration');

        if($slotDuration == ''){
            $allTimeSlots = ['09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'];
            return response()->json(['availableTimeSlots' => $allTimeSlots]);
        }

        $maxBookingsPerSlot = 2; 
    
        $allTimeSlots = ['09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'];
    
        $availableTimeSlots = [];
    
        foreach ($allTimeSlots as $startTime) {
            $endTime = Carbon::parse($startTime)->addHours($slotDuration)->format('H:i');
    
         
            $bookingsInSlot = array_filter($bookedSlots, function ($slot) use ($startTime, $endTime) {
                return $slot > $startTime && $slot <= $endTime;
            });
    
          
            if (count($bookingsInSlot) < $maxBookingsPerSlot) {
                $availableTimeSlots[] = $startTime;
            }
        }
    
        return response()->json(['availableTimeSlots' => $availableTimeSlots]);
    }
    

   
    public function store(Request $request , string $id)
    {
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        $input['product_id'] = $id;   
        Booking::create($input);
        return redirect('dashboard')->with('flash_message', 'Booking Succeefull!');  
    }

   

    public function show(Booking $booking)
    {
        
    }

   
    public function edit(Booking $booking)
    {
       
    }

  
    public function update(Request $request, Booking $booking)
    {
        
    }

   
    public function destroy(Booking $booking)
    {
        
    }
}
