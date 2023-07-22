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
          <h4 class="card-title">Fill the Details</h4>
        </div>
        <div class="card-body">
            <form>
                {{csrf_field() }}
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">First Name</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="ex. Juan">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Last Name</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="ex. Sebastian">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Full Address">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Contact No.</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="ex. 09164681183">
                  </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
              </form>
        </div>
      </div>
    </div>
  </div>



@endsection


@section('scripts')

@endsection