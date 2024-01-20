<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\DoctorDepartment;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.patient.index',[
            'patients'=>Patient::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.patient.add',[
            'departments'=>DoctorDepartment::where('status',1)->get(),
            'patients'=>Patient::where('status',1)->latest()->take(8)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Patient::newPatient($request);
        return back()->with('message','patient info added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        return view('admin.patient.edit',[
            'patient'=>$patient,
            'departments'=>DoctorDepartment::where('status',1)->get(),
            'patients'=>Patient::whereNotIn('id', [$patient->id])->latest()->take(8)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        Patient::updatePatient($request,$patient->id);
        return redirect()->route('patient.index')->with('message','patient info update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        Patient::deletePatient($patient->id);
        return back()->with('message','delete patient info successfully.');
    }
}
