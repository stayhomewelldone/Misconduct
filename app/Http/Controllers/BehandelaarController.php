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
        $criticalMeldingen = Melding::where('urgency', '=', $status)
                                      ->Where('status', '=', '0')  ;

        return $criticalMeldingen->get();
    }



    public function show ($id){

        $melding = Melding::find($id);

        return view('behandelaar.show', [

            'melding' => $melding

        ]);
    }

    public function update(Request $request, $id){
        //validaten wat ingevuld moet worden
        $request->validate([
            'urgency' => 'required',
            'category' => 'required',
            'issue'=>'required',
            'file_path'=> 'required',
        ]);

        $request->file('file_path')->storePublicly('file_path', 'public');

        $melding = Melding::find($id);
        $melding->urgency = $request->get('urgency');
        $melding->category = $request->get('category');
        $melding->issue = $request->get('issue');
        $melding->file_path = $request->file('file_path')->hashName();
        $melding->save();

        return redirect()->route('behandelaar.index');
    }

    public function toggleActivity(Melding $melding)
    {

        $currentState = $melding->status;
        if ($currentState)
        {
            $newState = false;
        } else
        {
            $newState = true;
        }

        $melding->status = $newState;
        $melding->save();
        return redirect(route('behandelaar.index'));
    }

}

