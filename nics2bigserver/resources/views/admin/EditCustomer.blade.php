@extends('layouts.master')


@section('title')
    Admin | Server 
@endsection

@section('sidebar')

<!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
        <div class="logo">
          <img src="/images/Logo1.jpeg" class=".rounded-lg" style="width: 250px; height: auto;">
        </div>
  
         <div class="sidebar-wrapper" id="sidebar-wrapper">
          <ul class="nav">
            <li>
              <a href="/Admin">
                <i class="now-ui-icons design_app"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="active ">
              <a href="/Customer">
                <i class="now-ui-icons users_circle-08"></i>
                <p>Customers</p>
              </a>
            </li>
            <li>
              <a href="/Products">
                <i class="now-ui-icons shopping_tag-content"></i>
                <p>Products</p>
              </a>
            </li>
            <li>
              <a href="/Personnels">
                <i class="now-ui-icons sport_user-run"></i>
                <p>Personnels</p>
              </a>
            </li>
            <li>
              <a href="/Orders">
                <i class="now-ui-icons files_single-copy-04"></i>
                <p>Orders</p>
              </a>
            </li>
            <li>
              <a href="/Delivery">
                <i class="now-ui-icons shopping_delivery-fast"></i>
                <p>Delivery</p>
              </a>
            </li>
            <li>
              <a href="/Notification">
                <i class="now-ui-icons ui-1_send"></i>
                <p>Notifications</p>
              </a>
            </li>
            <li>
              <a href="/Report">
                <i class="now-ui-icons ui-1_calendar-60"></i>
                <p>Reports</p>
              </a>
            </li>
            <li>
              <a href="/Analytics">
                <i class="now-ui-icons media-2_sound-wave"></i>
                <p>Analytics</p>
              </a>
            </li>
  
          </ul>
        </div>

@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Edit the Details</h4>
        </div>
        <div class="card-body">
            
          @if (Session::has('success'))
          <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
          </div>  
          @endif
          <form method="post" action="{{url('/UpdateCustomer')}}">
                {{csrf_field() }}
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputFirstname">First Name</label>
                    <input type="text" class="form-control" name="first_name" placeholder="ex. Juan" value="{{$data->first_name}}">
                    @error('first_name')
                      <div class="alert alert-danger" role="alert">
                        {{$message}}
                      </div> 
                    @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputLastname">Last Name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="ex. Sebastian" value="{{$data->last_name}}">
                    @error('last_name')
                      <div class="alert alert-danger" role="alert">
                        {{$message}}
                      </div> 
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" name="address" placeholder="Full Address" value="{{$data->address}}">
                  @error('address')
                    <div class="alert alert-danger" role="alert">
                    {{$message}}
                    </div> 
                  @enderror
                </div>
                <div class="form-group">
                    <label for="inputContact">Contact No.</label>
                    <input type="text" class="form-control" name="contact_information" placeholder="ex. 09164681183" value="{{$data->contact_information}}">
                    @error('contact_information')
                      <div class="alert alert-danger" role="alert">
                        {{$message}}
                      </div> 
                    @enderror
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{$data->email}}">
                    @error('email')
                      <div class="alert alert-danger" role="alert">
                        {{$message}}
                      </div> 
                    @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" value="{{$data->password}}">
                    @error('password')
                      <div class="alert alert-danger" role="alert">
                        {{$message}}
                      </div> 
                    @enderror
                  </div>
                </div>
                <div>
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
                </div>
                <div>
                  <a href="{{url('/Customer')}}" class="btn btn-danger btn-lg btn-block">Cancel</a>
                </div>
              </form>
        </div>
      </div>
    </div>
  </div>



@endsection


@section('scripts')

@endsection