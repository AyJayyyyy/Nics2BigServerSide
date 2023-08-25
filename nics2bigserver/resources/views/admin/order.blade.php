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
              <li>
                <a href="/Customer">
                  <i class="now-ui-icons users_circle-08"></i>
                  <p>Customers</p>
                </a>
              </li>
              <li>
                <a href="/Product">
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
              <li class="active">
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
          <h4 class="card-title"> Orders</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class="text-center text-primary">
                <th>Order ID</th>
                <th>Customer ID</th>
                <th>Product ID</th>
                <th>Order Date</th>
                <th>Quantity</th>
                <th>Total Cost</th>
                <th>Actions</th>
              </thead>
              <tbody>
                @foreach ($orders as $order)    
                  <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->customer->first_name}} {{$order->customer->last_name}}</td>
                    <td><img src="{{ asset('storage/' . $order->product->product_image)}}" alt=""/></td>
                    <td>{{$order->order_date}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->total_cost}}</td>
                    <td>
                      <a href="">
                        <button type="button" class="btn btn-success btn-md">Accept</button>
                      </a>
                      <a href="">
                        <button type="button" class="btn btn-danger btn-md">Decline</button>
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection


@section('scripts')

@endsection