<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Patient;
use Illuminate\Http\Request;


class patientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['show', 'index']);
        $this->middleware(['isAdmin'])->except(['index', 'create', 'store', 'update', 'edit']);
    }
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }


    public function create()
    {
        $patients = Patient::all();
        return view('patients.create', [
            'patients' => $patients,
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'user_id' => 'required',
            'number' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'mental_health' => 'required',
            'extra_support' => 'required',
            'score' => 'required',
            'department' => 'required',
            'remark' => 'required'
        ]);


//             Store the record, using the new file hashname which will be it's new filename identity.
        Patient::create([
            'user_id' => Auth::user()->id,
            'number' => $request->get('number'),
            'age' => $request->get('age'),
            'gender' => $request->get('gender'),
            'mental_health' => $request->get('mental_health'),
            'extra_support' => $request->get('extra_support'),
            'score' => $request->get('score'),
            'department' => $request->get('department'),
            'remark' => $request->get('remark'),

        ]);


        return redirect()->route('patients.index');
    }

    public function show($id)
    {

//        $culturesAdded = File::where('user_id', '=', Auth::id())->count();
//        $warning = 'View can only be seen after you add 3 new countries';

        $patient = Patient::find($id);

//        if (Auth::id() !== $culture->user_id  && Auth::user()->role !== 'admin' && $culturesAdded < 3) {
//            return redirect()->route('cultures.index', compact('warning', 'culturesAdded'));
//        }else
//
//
        return view('patients.show', [
            'patient' => $patient
        ]);

    }

//Dit is de functie die ervoor zorgt dat de id die je aanklikt de oude data blijft houden
    public function edit($id)
    {
        $patient = Patient::find($id);

        return view('patients.edit', compact('patient'));
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

        $patient = Patient::find($id);
        if ($patient->user_id !== Auth::user()->id) {
            return redirect()->route('patients.index');
        } else {
            $patient->number = $request->get('number');
            $patient->age = $request->get('age');
            $patient->gender = $request->get('gender');
            $patient->mental_health = $request->get('mental_health');
            $patient->extra_support = $request->get('extra_support');
            $patient->score = $request->get('score');
            $patient->department = $request->get('department');
            $patient->reamrk = $request->get('remark');

        }

        $patient->update();

        return redirect()->route('patients.index', $patient->id);
    }

    public function destroy($id)
    {
        $info = Patient::find($id);

        if ($info->user_id === Auth::id() || Auth::user()->role === 'admin') {
            $info->delete();
        }

        if (Auth::user() && Auth::user()->role === 'admin') {
            return redirect('patients');
        } elseif (Auth::user()) {
            return redirect('patients');
        }
    }


    public function search()
    {

        $search = $_GET['search'];
        $patients = Patient::where('number', 'LIKE', '%' . $search . '%')
            ->orWhere('department', 'LIKE', '%' . $search . '%')->get();
        return view('search.search', compact('patients'));
    }


}
