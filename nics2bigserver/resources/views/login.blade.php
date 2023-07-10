@extends('layout')
@section('title', 'Login')
@section('content')
    
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
    <div class="container bg-black" style="--bs-bg-opacity: .30; width: 350px; height: 500px;">
        

        <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-5 " style="width: 250px" >
            @csrf
            <div class="mb-3">
                <label class="mt-5 form-label"></label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email">
            </div>
            
            <div class="mb-5">
              <label for="exampleInputPassword1" class="form-label"></label>
              <input type="password" class="form-control" name="password" placeholder="Enter Password">
            </div>
            
            <div class="mb-4 d-grid gap-2">
            <button type="submit" class="btn btn-primary btn-lg">Login</button>
            </div>

            <div class="container">
                <img src="/images/Logo1.jpeg" style="width: 225px; height: auto;">
            </div>

          </form>
    </div>
@endsection
