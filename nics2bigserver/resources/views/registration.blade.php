@extends('layout')
@section('title', 'Registration')
@section('content')
    
  
    <div class="container bg-black" style="--bs-bg-opacity: .30; width: 350px; height: 500px;">
        <form action="{{route('registration.post')}}" method="POST" class="ms-auto me-auto mt-5 " style="width: 250px" >
            @csrf
            <div class="mb-3">
              <label class="mt-5 form-label">Full Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter your Name">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email">
            </div>
            
            <div class="mb-5">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Enter Password">
            </div>
           
            <div class="d-grid gap-2">
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
