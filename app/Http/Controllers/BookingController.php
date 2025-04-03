<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Car;
class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'pickup_location' => 'required|string|max:255',
            'car_id' => 'required|exists:cars,id',
        ]);

        Booking::create([
            'customer_name' => $request->customer_name,
            'phone_number' => $request->phone_number,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'pickup_location' => $request->pickup_location,
            'car_id' => $request->car_id,
        ]);

        return redirect()->back()->with('success', 'Đặt xe thành công!');
    }
}
