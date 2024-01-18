@extends('admin.layout.app')
@section('title','New Department')
@section('body')
    <div class="d-md-flex justify-content-between">
        <h5 class="mb-0">Add New Department</h5>

        <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Doctris</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Department</li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-8 mt-4">
            <div class="card border-0 p-4 rounded shadow">
                <div class="row justify-content-center align-items-center">
                    <p class="alert alert-success text-center" x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">{{session('message')}}</p>
                    <form class="mt-4" action="{{route('doctor-department.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-lg-5 col-md-4">
                                    <img src="" id="show_image" class="avatar avatar-md-md rounded-pill shadow mx-auto d-block" alt="banner">
                                </div>
                                <!--end col-->
                                <div class="col-lg-5 col-md-12 text-lg-end text-center mt-4 mt-lg-0">
                                    <input type="file" name="banner" id="imgInp" class="form-control">
                                </div><!--end col-->
                            </div>
                            <div class="row my-5">
                                <div class="mb-3">
                                    <label class="form-label">Department Name</label>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Department Name" required>
                                    <span class="text-danger">{{$errors->has('name') ? $error->first('name'):''}}</span>
                                </div>
                                <!--end col-->
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-select form-control">
                                        <option selected value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <!--end col-->
                            </div><!--end row-->
                            <button type="submit" class="btn btn-primary">Add Department</button>
                    </form>
                </div><!--end row-->

            </div>
        </div><!--end col-->

        <div class="col-lg-4 mt-4">
            <div class="card rounded border-0 shadow">
                <div class="p-4 border-bottom">
                    <h5 class="mb-0">Department List</h5>
                </div>
                <ul class="list-unstyled mb-0 p-4" data-simplebar style="height: 690px;">
                    @forelse($departments as $department)
                    <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                        <img src="{{asset($department->banner)}}" class="avatar avatar-medium rounded-md shadow" alt="">
                        <div class="ms-md-3 mt-4 mt-sm-0">
                            <a href="#" class="text-dark h6">{{$department->name}}</a>
                        </div>
                        <div class="ms-md-3 d-flex mt-4 mt-sm-0">
                            <a href="{{route('doctor-department.edit',$department->id)}}" class="btn btn-primary btn-sm mx-1"><i class="fa fa-edit"></i></a>
                            <a href="#" class="">
                                <form action="{{route('doctor-department.destroy',$department->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('are you sure to delete ?')" type="submit"><i class="fa fa-trash"></i></button>
                                </form>

                            </a>
                        </div>
                    </li>
                    @empty
                        <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                            <div class="ms-md-3 mt-4 mt-sm-0">
                                <p href="#" class="text-dark h6">No Department Found</p>
                            </div>
                        </li>
                    @endforelse

                    <li class="mt-4">
                        <a href="{{route('doctor-department.index')}}" class="btn btn-primary">All Department</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--end row-->
@endsection
