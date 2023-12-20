<?php

namespace App\Http\Controllers;

use App\Models\Alerts;
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
            $newAlert = Alerts::create([
                'name' => $user->name, // Automatically set the current date and time
                'messages' => $request->input('messages'),
            ]);
            return redirect('/alert')->with('success', 'Alert registered successfully!');
        } else {
            // Redirect back with an error message or perform any other actions
            return redirect()->back()->with('error', 'User not authenticated.');
        }
    }
}

