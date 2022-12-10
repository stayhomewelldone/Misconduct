<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class notificationController extends Controller
{

    public function index()
    {
        return view('notifications.index');
    }
}
