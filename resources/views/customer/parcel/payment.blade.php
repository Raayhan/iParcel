@extends('layouts.app')
@section('pagetitle', 'Payment')
@section('styles')
<link href="{{ asset('css/vendor/admin.min.css') }}" rel="stylesheet">
@stop
@section('content')
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/customer/dashboard">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user-secret fa-sm"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Control Panel</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="/customer/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>DASHBOARD</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Service
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Parcel" aria-expanded="true" aria-controls="Branch">
            <i class="fas fa-box-open"></i>
          <span>PARCEL</span>
        </a>
        <div id="Parcel" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="/customer/parcel/request"><i class="fas fa-calendar-plus"></i> &nbsp;Request Parcel</a>
            <a class="collapse-item" href="/customer/parcel/check"><i class="fas fa-eye"></i> &nbsp;Check Status</a>
            <a class="collapse-item" href="/customer/parcel/all"><i class="fas fa-list-ul"></i> &nbsp;All Parcels</a>
            
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Branch" aria-expanded="true" aria-controls="Customer">
            <i class="fas fa-code-branch"></i>
          <span>BRANCHES</span>
        </a>
        <div id="Branch" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class=" py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="\customer\branch\all"><i class="fas fa-list-ul"></i> &nbsp;All Branches</a>
           
            
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Operations
      </div>

   

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="\customer\payments">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>PAYMENT HISTORY</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="\customer\calculate">
          <i class="fas fa-coins"></i>
          <span>CALCULATE CHARGE</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Account" aria-expanded="true" aria-controls="Account">
          <i class="fas fa-user-secret"></i>
          <span>ACCOUNT</span></a>
          <div id="Account" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class=" py-2 collapse-inner rounded">
              <a class="collapse-item" href="\customer\profile\settings"><i class="fas fa-user-cog"></i> &nbsp;Account Settings</a>
              <a class="collapse-item" href="\customer\profile\password"><i class="fas fa-user-lock"></i> &nbsp;Change Password</a>
              
          </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

 <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
         <div id="content">

     

               <!-- Begin Page Content -->
              <div class="container-fluid py-4">

                <div class="card Poppins">
                    <div class="card-body" style="height:100vh;padding-left:5%;padding-right:5%;">
                        <h3 class="text-center">Payment</h3><hr>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="row justify-content-center">
                                    <h6 class="text-center">Payable Amount : </h6><h6 class="font-weight-bold mdb-color-text"> &nbsp;{{$amount}}.00৳</h6>
                                </div>
                                
                            </div>
                            <div class="col-md-4">
                               
                            </div>
                            <div class="col-md-4 small">
                                <div class="row justify-content-center">
                                    <span>REQUEST ID :</span><span class="mdb-color-text" style="font-weight:bold;"> &nbsp;{{$parcel_id}}</span>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <img style="max-width:15%" src="{{asset('img/Bkash.svg')}}" alt="">
                           </div>
                           <div class="row justify-content-center">
                            <div class="col">
                              <h6 class="text-center">Please Pay {{$amount}}.00৳ to the below bKash merchant number</h6>
                            </div>
                          
                           
                            
                         </div>
                         <div class="row justify-content-center mb-4">
                            
                          <h5 class="font-weight-bold">01675613100</h5>
                          
                           
                        </div>
                       <form action="/customer/parcel/confirm" method="POST">
                        @csrf
                       
                        <div class="row justify-content-center" style="margin-top:5%;">
                          <div class="col-md-4">
                            <div class="form-group">
                              <input id="bkash_number" type="text"  name="bkash_number" class="form-control @error('bkash_number') is-invalid @enderror" placeholder="bKash Account Number"autofocus  />
                              @error('bkash_number')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                          </div>
                        </div>
                        
                        <div class="row justify-content-center mb-4">
                          <div class="col-md-4">
                            <div class="form-group">
                              <input id="trxid" type="text"  name="trxid" class="form-control @error('trxid') is-invalid @enderror" placeholder="TrxID Number"  />
                              @error('trxid')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                          </div>
                        </div>

                        
                           <div class="row justify-content-center">
                             <div class="col-md-4">
                              
                              <input type="hidden" name="parcel_id" value="{{$parcel_id}}">
                                <input type="hidden" name="sender_name" value="{{$sender_name}}">
                                <input type="hidden" name="sender_phone" value="{{$sender_phone}}">
                                <input type="hidden" name="sender_address" value="{{$sender_address}}">
                                <input type="hidden" name="recipient_name" value="{{$recipient_name}}">
                                <input type="hidden" name="recipient_phone" value="{{$recipient_phone}}">
                                <input type="hidden" name="recipient_address" value="{{$recipient_address}}">
                                <input type="hidden" name="zone" value="{{$zone}}">
                                <input type="hidden" name="type" value="{{$type}}">
                                <input type="hidden" name="delivery" value="{{$delivery}}">
                                <input type="hidden" name="details" value="{{$details}}">
                                <input type="hidden" name="status" value="Requested,Pending Approval">
                                <input type="hidden" name="notes" value="{{$notes}}">
                                <input type="hidden" name="payment_status" value="Paid">
                                <input type="hidden" name="amount" value="{{$amount}}">
                              <button type="submit" class="btn btn-unique btn-block">Verify</button>
                             </div>
                             
                           </div>
                          </form>
                    
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>

@section('scripts')
<script src="{{asset('js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/vendor/admin.js')}}"></script>


@stop
@endsection
