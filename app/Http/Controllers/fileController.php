<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class fileController extends Controller
{


    public function index()
    {
        $files = Patient::all();
        return view('files.index', compact('files'));
    }


//    public function create(){
//        return view('files.create');
//    }
//
//    public function store(Request $request){
//
//        $request->validate([
//            'number' => 'required',
//            'name' => 'required',
//
//        ]);
//
////             Store the record, using the new file hashname which will be it's new filename identity.
//        $file = new Patient([
//            "number" => $request->get('number'),
//            "name" => $request->get('name'),
//            'user_id' => \Auth::user()->id
//        ]);
//        $file->save(); // Finally, save the record.
//
//        return redirect()->route('files.index');
//    }
    public function show($id)
    {
        $file = Patient::find($id);
            return view('files.show', [
                'file' => $file
            ]);

    }

//Dit is de functie die ervoor zorgt dat de id die je aanklikt de oude data blijft houden
    public function edit($id)
    {
        $file = Patient::find($id);

            return view('files.edit', compact('file'));
        }


    //Deze functie zorgt ervoor dat het de nieuwe data die ingevuld is update naar de home page
    public function update(Request $request, $id)
    {
        $request->validate([
            'number' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'mental_health' => 'required',
            'extra_support' => 'required',
            'score' => 'required',
            'department' => 'required',
            'remark' => 'required'

        ]);


        $file = Patient::find($id);
        if ( $file->user_id !== Auth::user()->id) {
            return redirect()->route('patients.index');
        } else {
            $file->number = $request->get('number');
            $file->age = $request->get('age');
            $file->gender = $request->get('gender');
            $file->mental_health = $request->get('mental_health');
            $file->extra_support = $request->get('extra_support');
            $file->score = $request->get('score');
            $file->department = $request->get('department');
            $file->remark = $request->get('remark');

        }

        $file->update();

        return redirect()->route('files.index',  $file->id);
}
    public function destroy($id)
    {
        $info = Patient::find($id);

        if ($info->user_id === Auth::id() || Auth::user()->role === 'admin') {
            $info->delete();
        }

        if (Auth::user() && Auth::user()->role === 'admin') {
            return redirect('files');
        } elseif (Auth::user()) {
            return redirect('files');
        }
    }



}
