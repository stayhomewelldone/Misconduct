<?php

namespace App\Http\Controllers;

use App\Models\Melding;
use Illuminate\Http\Request;

class AfgerondController extends Controller
{
    public function index(){

        $meldingen = Melding::where('status', '=', '1')->get();

        return view('afgerond.index', compact('meldingen'));
    }
}
