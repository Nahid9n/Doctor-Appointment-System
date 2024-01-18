<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\DoctorDepartment;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

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
        return view('admin.doctor.department.add',[
            'departments'=>DoctorDepartment::latest()->take(8)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'name'=>'required'
        ],[
            'name.required'=>'name is required'
        ]);
        DoctorDepartment::newDepartment($request);
        Toastr::success('message','new department create success.');
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
        return view('admin.doctor.department.edit',
            [
                'department'=>$doctorDepartment,
                'departments'=>DoctorDepartment::whereNotIn('id', [$doctorDepartment->id])->latest()->get(),
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DoctorDepartment $doctorDepartment)
    {
        DoctorDepartment::updateDepartment($request,$doctorDepartment->id);
        return redirect()->route('doctor-department.index')->with('message','update department info success.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DoctorDepartment $doctorDepartment)
    {
        DoctorDepartment::deleteDepartment($doctorDepartment->id);
        return back()->with('message','Delete Department Success.');
    }
}
