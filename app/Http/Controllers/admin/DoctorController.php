<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\DoctorDepartment;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.doctor.index',[
            'doctors'=>Doctor::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.doctor.add',[
            'doctors'=>Doctor::latest()->take(8)->get(),
            'departments'=>DoctorDepartment::where('status',1)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Doctor::newDoctor($request);
        return back()->with('message','New Doctor Added Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        return view('admin.doctor.edit',[
            'doctor'=>$doctor,
            'departments'=>DoctorDepartment::where('status',1)->get(),
            'doctors'=>Doctor::latest()->take(8)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        Doctor::updateDoctor($request,$doctor->id);
        return redirect()->route('doctors.index')->with('message','update doctor info successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        Doctor::deleteDoctor($doctor->id);
        return back()->with('message','Delete Doctor Info Successfully.');
    }
}
