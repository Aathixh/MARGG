<?php

namespace App\Http\Controllers;

use App\Models\Alerts;
use Illuminate\Http\Request;

class AdminAlertController extends Controller
{
    public function index()
    {
        $AlertMsg = Alerts::all();
        return view('administrator.admin')->with(['AlertMsg' => $AlertMsg]);
    }
}
