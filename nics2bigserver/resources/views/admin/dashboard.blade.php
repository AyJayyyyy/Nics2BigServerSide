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
            <li class="active ">
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
          <h4 class="card-title"> Dashboard</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <a href="/Customer">
                    <img src="/images/CustomerLogo.jpg" alt="Clickable Image" style="width: 225px; height: auto;">
                  </a>
                  <a href="/Product">
                    <img src="/images/ProductLogo.jpg" alt="Clickable Image" style="width: 225px; height: auto;">
                  </a>
                  <a href="/Personnels">
                    <img src="/images/PersonnelsLogo.jpg" alt="Clickable Image" style="width: 225px; height: auto;">
                  </a>
                  <a href="/Orders">
                    <img src="/images/OrdersLogo.jpg" alt="Clickable Image" style="width: 225px; height: auto;">
                  </a>
                  <a href="/Delivery">
                    <img src="/images/DeliveryLogo.jpg" alt="Clickable Image" style="width: 225px; height: auto;">
                  </a>
                  <a href="/Notification">
                    <img src="/images/NotificationLogo.jpg" alt="Clickable Image" style="width: 225px; height: auto;">
                  </a>
                  <a href="/Report">
                    <img src="/images/ReportLogo.jpg" alt="Clickable Image" style="width: 225px; height: auto;">
                  </a>
                  <a href="/Analytics">
                    <img src="/images/AnalyticsLogo.jpg" alt="Clickable Image" style="width: 225px; height: auto;">
                  </a>
                </tr>
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