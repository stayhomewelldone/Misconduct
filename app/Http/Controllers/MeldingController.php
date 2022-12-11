<?php

namespace App\Http\Controllers;

use App\Models\melding;
use Illuminate\Http\Request;

class MeldingController extends Controller
{
    public function index() {
        $meldings = melding::all();
        return view('melding', compact('meldings'));
    }







}
