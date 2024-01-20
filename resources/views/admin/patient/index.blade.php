@extends('admin.layout.app')
@section('title','Doctor Page')
@section('body')
    <div class="row">
        <div class="col-xl-9 col-md-6">
            <h5 class="mb-0">Doctor</h5>
            <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Doctor</li>
                </ul>
            </nav>
        </div><!--end col-->

        <div class="col-xl-3 col-md-6 mt-4 mt-md-0 text-md-end">
            <a href="{{route('doctors.create')}}" class="btn btn-primary">Add New Doctor</a>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row row-cols-md-2 row-cols-lg-5">
        @foreach($doctors as $doctor)
            <div class="col-4 my-4">
                <div class="card border-0" style="height: 200px;">
                    <div class="card-body text-center">
                        <img src="{{asset($doctor->image)}}" class="" height="100" width="100" alt="">
                        <p class="fw-bold text-center speciality">{{$doctor->first_name.' '.$doctor->last_name}}</p>
                    </div>
                    <div class=" justify-content-center btn-group ">
                        <a class="btn btn-primary" href="{{route('doctors.edit',$doctor->id)}}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="">
                            <form action="{{route('doctors.destroy',$doctor->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('are you sure to delete ?')" type="submit"><i class="fa fa-trash"></i></button>
                            </form>
                        </a>
                    </div>
                </div>
            </div><!--end col-->
        @endforeach
    </div><!--end row-->
@endsection
