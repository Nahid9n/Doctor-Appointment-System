@extends('admin.layout.app')
@section('title','New Department')
@section('body')
    <div class="d-md-flex justify-content-between">
        <h5 class="mb-0">Add New Department</h5>

        <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item"><a href="index.html">Doctris</a></li>
                <li class="breadcrumb-item"><a href="doctors.html">Doctors</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Department</li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-8 mt-4">
            <div class="card border-0 p-4 rounded shadow">
                <div class="row justify-content-center align-items-center">
                    <p class="text-dark bg-success text-center">{{session('message')}}</p>
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
                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label">Department Name</label>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="First Name :">
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
                    <h5 class="mb-0">Doctors List</h5>
                </div>
                <ul class="list-unstyled mb-0 p-4" data-simplebar style="height: 690px;">
                    <li class="d-md-flex align-items-center text-center text-md-start">
                        <img src="{{asset('/')}}admin/assets/images/doctors/01.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                        <div class="ms-md-3 mt-4 mt-sm-0">
                            <a href="#" class="text-dark h6">Dr. Calvin Carlo</a>
                            <p class="text-muted my-1">Cardiologist</p>
                            <p class="text-muted mb-0">3 Years Experienced</p>
                        </div>
                    </li>

                    <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                        <img src="{{asset('/')}}admin/assets/images/doctors/02.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                        <div class="ms-md-3 mt-4 mt-sm-0">
                            <a href="#" class="text-dark h6">Dr. Alex Smith</a>
                            <p class="text-muted my-1">Dentist</p>
                            <p class="text-muted mb-0">1 Years Experienced</p>
                        </div>
                    </li>

                    <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                        <img src="{{asset('/')}}admin/assets/images/doctors/03.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                        <div class="ms-md-3 mt-4 mt-sm-0">
                            <a href="#" class="text-dark h6">Dr. Cristina Luly</a>
                            <p class="text-muted my-1">Orthopedic</p>
                            <p class="text-muted mb-0">5 Years Experienced</p>
                        </div>
                    </li>

                    <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                        <img src="{{asset('/')}}admin/assets/images/doctors/04.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                        <div class="ms-md-3 mt-4 mt-sm-0">
                            <a href="#" class="text-dark h6">Dr. Dwayen Maria</a>
                            <p class="text-muted my-1">Gastrologist</p>
                            <p class="text-muted mb-0">2 Years Experienced</p>
                        </div>
                    </li>

                    <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                        <img src="{{asset('/')}}admin/assets/images/doctors/05.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                        <div class="ms-md-3 mt-4 mt-sm-0">
                            <a href="#" class="text-dark h6">Dr. Jenelia Focia</a>
                            <p class="text-muted my-1">Psychotherapist</p>
                            <p class="text-muted mb-0">3 Years Experienced</p>
                        </div>
                    </li>

                    <li class="mt-4">
                        <a href="doctors.html" class="btn btn-primary">All Doctors</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--end row-->
@endsection
