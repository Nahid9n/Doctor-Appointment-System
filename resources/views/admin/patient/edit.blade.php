@extends('admin.layout.app')
@section('title','Edit Doctor')
@section('body')
    <div class="d-md-flex justify-content-between">
        <h5 class="mb-0">Add New Patient</h5>

        <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Patient</li>
            </ul>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-8 mt-4">
            <div class="card border-0 p-4 rounded shadow">
                <p class="alert alert-success text-center" x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">{{session('message')}}</p>
                <form class="mt-4" action="{{route('patient.update',$patient->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-5 col-md-4">
                            <img src="{{asset($patient->image)}}" id="show_image" class="avatar avatar-md-md rounded-pill shadow mx-auto d-block" alt="banner">
                        </div>
                        <!--end col-->
                        <div class="col-lg-5 col-md-12 text-lg-end text-center mt-4 mt-lg-0">
                            <input type="file" name="image" id="imgInp" class="form-control">
                        </div><!--end col-->
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input name="name" id="name" value="{{$patient->name}}" type="text" class="form-control" placeholder=" Name :">
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Age</label>
                                <input name="age" id="name2" type="number" value="{{$patient->age}}" class="form-control" placeholder="Last Name :">
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Your Email</label>
                                <input name="email" id="email" type="email" value="{{$patient->email}}" class="form-control" placeholder="Your email :">
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Phone no.</label>
                                <input name="mobile" id="number" type="number" value="{{$patient->mobile}}" class="form-control" placeholder="Phone no. :">
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Departments</label>
                                <select name="department_id" class="form-select mdi-select-search form-control">
                                    @forelse($departments as $department)
                                        <option {{$department->id == $patient->department_id ? 'selected':''}} value="{{$department->id}}">{{$department->name}}</option>
                                    @empty
                                        <option value="EY">No Department Found</option>
                                    @endforelse
                                </select>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Gender</label>
                                <select name="gender" class="form-select form-control">
                                    <option {{$patient->gender == 'male' ? 'selected':''}} value="male">Male</option>
                                    <option {{$patient->gender == 'female' ? 'selected':''}} value="female">Female</option>
                                    <option {{$patient->gender == 'other' ? 'selected':''}} value="other">Other</option>
                                </select>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Date</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text bg-light border border-end-0 text-dark" id="insta-id"><i data-feather="date" class="fea icon-sm"></i></span>
                                    <input type="date" name="date" value="{{$patient->date}}" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="insta-id">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">time</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text bg-light border border-end-0 text-dark" id="insta-id"><i data-feather="instagram" class="fea icon-sm"></i></span>
                                    <input type="time" name="time" value="{{$patient->time}}" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="insta-id">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select form-control">
                                    <option {{$patient->gender == 1 ? 'selected':''}} value="1">Active</option>
                                    <option {{$patient->gender == 0 ? 'selected':''}} value="0">Inactive</option>
                                </select>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea name="address" id="comments" rows="3" class="form-control" placeholder="Address :"> {{$patient->address}}</textarea>
                            </div>
                        </div>
                    </div><!--end row-->

                    <button type="submit" class="btn btn-primary">Update Patient</button>
                </form>
            </div>
        </div><!--end col-->

        <div class="col-lg-4 mt-4">
            <div class="card rounded border-0 shadow">
                <div class="p-4 border-bottom">
                    <h5 class="mb-0">Patient List</h5>
                </div>

                <ul class="list-unstyled mb-0 p-4" data-simplebar style="height: 690px;">
                    @forelse($patients as $patient)
                        <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                            <img src="{{asset($patient->image)}}" class="avatar avatar-medium rounded-md shadow" alt="">
                            <div class="ms-md-3 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h6">{{$patient->name}}</a>
                                <p class="text-muted my-1">{{$patient->department->name ?? ''}}</p>
                            </div>
                            <div class="ms-md-3 d-flex mt-4 mt-sm-0">
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
                            </div>
                        </li>
                    @empty
                        <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                            <div class="ms-md-3 mt-4 mt-sm-0">
                                <p href="#" class="text-dark h6">No Patient Found</p>
                            </div>
                        </li>
                    @endforelse
                    <li class="mt-4">
                        <a href="{{route('patient.index')}}" class="btn btn-primary">All Patient</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--end row-->
@endsection
