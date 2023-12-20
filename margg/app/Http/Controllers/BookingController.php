<?php

namespace App\Http\Controllers;

use App\Models\Bus;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    // public function index()
    // {
    //     $BusDetails = Bus::all();
    //     return view('booking.menu', ['BusData' => $BusDetails]);
    // }

    public function search(Request $request)
    {
        $toCity = $request->input('to');
        $froCity = $request->input('from');

        $busData = Bus::where('To', 'LIKE', "%$toCity%")
            ->where('From', 'LIKE', "%$froCity%")
            ->get();

        return view('booking.menu', ['BusData' => $busData]);
    }
}
