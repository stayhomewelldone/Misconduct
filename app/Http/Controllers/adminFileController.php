<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminFileController extends Controller
{

    public function index()
    {
        return view('adminFiles.index');
    }
}
