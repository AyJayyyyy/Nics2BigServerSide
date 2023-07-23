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
                <p>Product</p>
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
          <h4 class="card-title">Fill the Details</h4>
        </div>
        <div class="card-body">
            
          @if (Session::has('success'))
          <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
          </div>  
          @endif
          <form method="post" action="{{url('/AddCustomer')}}">
                {{csrf_field() }}
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputProductname">Product Name</label>
                    <input type="text" class="form-control" name="product_name" placeholder="ex. 1LT Bottle" value="{{old('product_name')}}">
                    @error('product_name')
                      <div class="alert alert-danger" role="alert">
                        {{$message}}
                      </div> 
                    @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPrice">Price</label>
                    <input type="text" class="form-control" name="product_price" placeholder="ex. ₱200" value="{{old('product_price')}}">
                    @error('product_price')
                      <div class="alert alert-danger" role="alert">
                        {{$message}}
                      </div> 
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPdescription">Product Description</label>
                  <input type="text" class="form-control" name="product_description" placeholder="Details" value="{{old('product_description')}}">
                  @error('product_description')
                    <div class="alert alert-danger" role="alert">
                    {{$message}}
                    </div> 
                  @enderror
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputA">Availability</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="availability" value="{{old('availability')}}">
                      <label class="form-check-label" for="inlineRadio1">Available</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="availability" id="inlineRadio2" value="{{old('availability')}}">
                      <label class="form-check-label" for="inlineRadio2">Out of Stock</label>
                    </div>
                    @error('availability')
                      <div class="alert alert-danger" role="alert">
                        {{$message}}
                      </div> 
                    @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputCapital">Capital</label>
                    <input type="text" class="form-control" name="capital_income" placeholder="ex. ₱200">
                    @error('capital_income')
                      <div class="alert alert-danger" role="alert">
                        {{$message}}
                      </div> 
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputContact">Choose an image file</label>
                  <input type="file" class="form-control-file" name="product_image" value="{{old('product_image')}}">
                  @error('product_image')
                    <div class="alert alert-danger" role="alert">
                      {{$message}}
                    </div> 
                  @enderror
              </div>
                <div>
                  <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
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