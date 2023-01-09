<?php

namespace App\Http\Controllers;

use App\Models\Melding;
use Illuminate\Http\Request;

class MeldingController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
////            ->except('index');
//    }

    public function index()
    {

//        auth(User::class);
        $meldingen = Melding::all();

//        $spells = Melding::where('activity', '=', '1')->get();

        return view('melding.index', compact('meldingen'));

//        return view('behandelaar.index', [
//                'criticalMeldingen'=>$this->getCriticalMeldingen()
//            ]
//        );

    }

//    public function getCriticalMeldingen(){
//
//
//        $criticalMeldingen = Melding::where('urgency', '=', 'critical');
//
//        return $criticalMeldingen->get();
//    }

    public function create(){
        return view('melding.create');
    }

    public function store(Request $request){

        $request->validate([
            'urgency' => 'required',
            'category' => 'required',
            'issue'=>'required',
        ]);

        if ($request->hasFile('file_path')) {

            $request->validate([
                'file' => 'mimes:txt,pdf'
            ]);


            $request->file('file_path')->storePublicly('file_path', 'public');

//             Store the record, using the new file hashname which will be it's new filename identity.
            $melding = new Melding([
                "urgency" => $request->get('urgency'),
                "category" => $request->get('category'),
                "issue" => $request->get('issue'),
                "file_path" => $request->file('file_path')->hashName(),
                'user_id' => \Auth::user()->id
            ]);
            $melding->save(); // Finally, save the record.
        }
        return redirect()->route('melding.index');
    }


}
