@extends('layout')
@section('title', 'Registration')
@section('content')
    
  
    <div class="container bg-black" style="--bs-bg-opacity: .30; width: 900px; height: 500px;">
        <form action="{{route('registration.post')}}" method="POST" class=" mt-5 ms-2 " style="width: 850px" >
            @csrf
            <h4 style="padding-top: 18px; padding-bottom: 2px;">Registration</h4>
            <div class="row mb-3">
                <div class="col">
                    <label class="mt-3 form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Enter your First name">
                </div>

                <div class="col">
                    <label class="mt-3 form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Enter your Last name">
                </div>
            </div> 

            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Enter your Address">
              </div>
            
            
            <div class="form-group col-md-6">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email">
            </div>
            
            <div class="form-group col-md-6">
              <label class="form-label mt-3">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Enter Password">
            </div>
           
            <div class="mt-4 d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-lg">Register</button>
            </div>

            <div class="mt-3">
                @if($errors->any())
                    <div class="col-12">
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                @endif

                @if(session()->has('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif

            </div>

          </form>
    </div>
@endsection
