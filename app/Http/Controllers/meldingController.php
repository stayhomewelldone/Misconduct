<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\melding;

class meldingController extends Controller
{
    public function index() {
        return view('melding');
    }
}
