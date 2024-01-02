<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
    
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
    
            // Count the bookings for the current slot
            $bookingsInSlot = array_filter($bookedSlots, function ($slot) use ($startTime, $endTime) {
                return $slot > $startTime && $slot <= $endTime;
            });
    
            // Check if the current slot has reached its maximum bookings
            if (count($bookingsInSlot) < $maxBookingsPerSlot) {
                $availableTimeSlots[] = $startTime;
            }
        }
    
        return response()->json(['availableTimeSlots' => $availableTimeSlots]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , string $id)
    {
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        $input['product_id'] = $id;   
        Booking::create($input);
        return redirect('dashboard')->with('flash_message', 'Booking Succeefull!');  
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
