@extends('admin.layout.app')
@section('title','Add Doctor')
@section('body')
    <div class="d-md-flex justify-content-between">
        <h5 class="mb-0">Add New Doctor</h5>

        <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item"><a href="index.html">Doctris</a></li>
                <li class="breadcrumb-item"><a href="doctors.html">Doctors</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Doctor</li>
            </ul>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-8 mt-4">
            <div class="card border-0 p-4 rounded shadow">
                <form class="mt-4" action="{{route('doctors.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-5 col-md-4">
                            <img src="" id="show_image" class="avatar avatar-md-md rounded-pill shadow mx-auto d-block" alt="banner">
                        </div>
                        <!--end col-->
                        <div class="col-lg-5 col-md-12 text-lg-end text-center mt-4 mt-lg-0">
                            <input type="file" name="image" id="imgInp" class="form-control">
                        </div><!--end col-->
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input name="first_name" id="first_name" type="text" class="form-control" placeholder="First Name :">
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input name="last_name" id="name2" type="text" class="form-control" placeholder="Last Name :">
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Your Email</label>
                                <input name="email" id="email" type="email" class="form-control" placeholder="Your email :">
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Phone no.</label>
                                <input name="phone" id="number" type="text" class="form-control" placeholder="Phone no. :">
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Departments</label>
                                <select name="department" class="form-select mdi-select-search form-control">
                                    @forelse($departments as $department)
                                    <option value="{{$department->id}}">{{$department->name}}</option>
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
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Experience</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text bg-light border border-end-0 text-dark" id="insta-id"><i data-feather="instagram" class="fea icon-sm"></i></span>
                                    <input type="number" name="experience" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="insta-id">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Instagram</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text bg-light border border-end-0 text-dark" id="insta-id"><i data-feather="instagram" class="fea icon-sm"></i></span>
                                    <input type="text" name="instagram" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="insta-id">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Facebook</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text bg-light border border-end-0 text-dark" id="fb-id"><i data-feather="facebook" class="fea icon-sm"></i></span>
                                    <input type="text" name="facebook" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="fb-id">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">LinkedIn</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text bg-light border border-end-0 text-dark" id="linke-pro"><i data-feather="linkedin" class="fea icon-sm"></i></span>
                                    <input type="text" name="linkedIn" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="linke-pro">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Twitter</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text bg-light border border-end-0 text-dark" id="twitter-id"><i data-feather="twitter" class="fea icon-sm"></i></span>
                                    <input type="text" name="twitter" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="twitter-id">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select form-control">
                                    <option selected value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Your Bio Here</label>
                                <textarea name="bio_data" id="comments" rows="3" class="form-control" placeholder="Bio :"></textarea>
                            </div>
                        </div>
                    </div><!--end row-->

                    <button type="submit" class="btn btn-primary">Add Doctor</button>
                </form>
            </div>
        </div><!--end col-->

        <div class="col-lg-4 mt-4">
            <div class="card rounded border-0 shadow">
                <div class="p-4 border-bottom">
                    <h5 class="mb-0">Doctors List</h5>
                </div>

                <ul class="list-unstyled mb-0 p-4" data-simplebar style="height: 690px;">
                    @forelse($doctors as $doctor)
                        <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                            <img src="{{asset($doctor->banner)}}" class="avatar avatar-medium rounded-md shadow" alt="">
                            <div class="ms-md-3 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h6">Dr. Alex Smith</a>
                                <p class="text-muted my-1">{{$doctor->department->name}}</p>
                                <p class="text-muted mb-0">1 Years Experienced</p>
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
                                <p href="#" class="text-dark h6">No Doctor Found</p>
                            </div>
                        </li>
                    @endforelse
                    <li class="mt-4">
                        <a href="{{route('doctors.index')}}" class="btn btn-primary">All Doctors</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--end row-->
@endsection
