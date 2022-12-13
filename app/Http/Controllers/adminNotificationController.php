<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminNotificationController extends Controller
{

    public function index()
    {
        return view('adminNotifications.index');
    }
}
