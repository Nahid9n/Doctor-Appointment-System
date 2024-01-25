@extends('admin.layout.app')
@section('title','Patient Page')
@section('body')
    <div class="row">
        <div class="col-xl-9 col-md-6">
            <h5 class="mb-0">Patient</h5>
            <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Patient</li>
                </ul>
            </nav>
        </div><!--end col-->

        <div class="col-xl-3 col-md-6 mt-4 mt-md-0 text-md-end">
            <a href="{{route('patient.create')}}" class="btn btn-primary">Add New Patient</a>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
            <div class="col-12 my-4">
                <div class="card border-0" style="height: 200px;">
                    <table class="table table-striped text-center table-bordered">
                        <tr>
                            <th>SL No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                        @foreach($patients as $patient)
                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{asset($patient->image)}}" class="" height="40" width="40" alt=""></td>
                                <td>{{$patient->name}}</td>
                                <td>{{ $patient->department->name ?? ''}}</td>
                                <td class="d-flex justify-content-center">
                                    <a class="btn btn-primary btn-sm mx-1" href="{{route('patient.edit',$patient->id)}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-success btn-sm mx-1" href="{{route('patient.show',$patient->id)}}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="mx-1" href="">
                                        <form action="{{route('patient.destroy',$patient->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('are you sure to delete ?')" type="submit"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <!--end col-->
    </div>
    <!--end row-->
@endsection
