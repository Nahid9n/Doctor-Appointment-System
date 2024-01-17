<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\DoctorDepartment;
use Illuminate\Http\Request;

class DoctorDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.doctor.department.index',[
            'departments'=>DoctorDepartment::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.doctor.department.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DoctorDepartment::newDepartment($request);
        return back()->with('message','new department create success.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DoctorDepartment $doctorDepartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DoctorDepartment $doctorDepartment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DoctorDepartment $doctorDepartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DoctorDepartment $doctorDepartment)
    {
        //
    }
}
