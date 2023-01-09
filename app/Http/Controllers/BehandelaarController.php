<?php

namespace App\Http\Controllers;

use App\Models\Melding;
use Illuminate\Http\Request;

class BehandelaarController extends Controller
{
    //
    public function index()
    {

//        auth(User::class);
        $meldingen = Melding::all();

//        $meldingen = Melding::where('activity', '=', '1')->get();

        return view('behandelaar.index', [
                'criticalMeldingen'=>$this->getMeldingen('critical'),
                'worrisomeMeldingen'=>$this->getMeldingen('worrisome'),
                'notUrgentMeldingen'=>$this->getMeldingen('not urgent'),
            ]
        );
    }

    public function getMeldingen($status){
        $criticalMeldingen = Melding::where('urgency', '=', $status);

        return $criticalMeldingen->get();
    }

}

