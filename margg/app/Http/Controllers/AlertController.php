<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlertController extends Controller
{
    //

    public function AlertMsg(Request $request)
    {
        $request->validate([
            'messages' => 'required',
        ]);

        // Get the currently authenticated user
        $user = Auth::user();

        // Check if the user is authenticated
        if ($user) {
            // Create a new alert record with user's name, current date, and messages
            $newAlert = Alert::create([
                'name' => $user->name,
                'date' => now(), // Automatically set the current date and time
                'messages' => $request->input('messages'),
            ]);
            return redirect()->back()->with('success', 'Alert registered successfully!');
        } else {
            // Redirect back with an error message or perform any other actions
            return redirect()->back()->with('error', 'User not authenticated.');
        }
    }
}

