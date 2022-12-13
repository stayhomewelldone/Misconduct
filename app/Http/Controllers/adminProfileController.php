<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminProfileController extends Controller
{

    public function index()
    {
        return view('adminProfiles.index');
    }
}
