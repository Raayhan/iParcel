@extends('layouts.app')
@section('pagetitle', 'Login')
@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <h3 class="raleway mb-4">Login to iParcel</h3>
            
    </div>
    <div class="row justify-content-center">
        <!-- Card deck -->
<div class="card-deck">

    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      <div class="view overlay">
      <img class="card-img-top" src="{{asset('img/customer.png')}}"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title text-center font-weight-bold">Customer</h4><hr>
        <!--Text-->
        <p class="card-text raleway text-center"><small>Login with customer account in order to place a parcel request & track your parcel status</small></p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <a type="button" href="/customer/login" class="btn btn-indigo btn-block">Login</a>
  
      </div>
  
    </div>
    <!-- Card -->
  
    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="{{asset('img/branch.png')}}"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title text-center font-weight-bold">Branch</h4><hr>
        <!--Text-->
        <p class="card-text raleway text-center"><small>Login with Branch account in order to manage Branch services</small></p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <a href="/branch/login" type="button" class="btn btn-unique btn-block">Login</a>
  
      </div>
  
    </div>
    <!-- Card -->
  
    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="{{asset('img/admin.png')}}"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title text-center font-weight-bold">Admin</h4><hr>
        <!--Text-->
        <p class="card-text raleway text-center"><small>Login with admin account in order to manage Admin services</small></p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <a href="/admin/login" type="button" class="btn btn-mdb-color btn-block">Login</a>
  
      </div>
  
    </div>
    <!-- Card -->
  
  </div>
  <!-- Card deck -->
    </div>
</div>
</div>
@endsection
