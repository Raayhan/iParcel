@extends('layouts.app')
@section('pagetitle', 'Check Status')
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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Parcel" aria-expanded="true" aria-controls="shipment">
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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#shipment" aria-expanded="true" aria-controls="Customer">
            <i class="fas fa-code-shipment"></i>
          <span>BRANCHES</span>
        </a>
        <div id="shipment" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class=" py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="\customer\shipment\parcels"><i class="fas fa-list-ul"></i> &nbsp;All shipmentes</a>
           
            
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
                {{-- Success Alert --}}
                @if(session('status'))
                <div class="alert alert-success alert-dismissible fade show text-center font-weight-bold small" role="alert">
                    {{session('status')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            {{-- Error Alert --}}
            @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show text-center font-weight-bold small" role="alert">
                        {{session('error')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            @endif
                @foreach($shipments as $shipment)
                <div class="card Poppins">
                    <div class="card-header">
                        <div class="row justify-content-center">
                        <span class="font-weight-bold small"></span>
                        </div>
                    </div>
                    <div class="card-body" style="padding-top:5%;padding-left:10%;padding-right:10%;">
                      <div class="row mb-4">
                        <div class="col-md-10">
                          <img style="max-width:20%!important;text-align:left;" src="{{ asset('img/logo.png') }}" alt="">
                        </div>
                        <div class="col-md-2 small">
                        <span>Parcel ID :</span><span class="mdb-color-text" style="font-weight:bold;"> &nbsp;{{$shipment->parcel_id}}</span>
                        </div>
                      </div>
                      <div class="row justify-content-center Poppins mb-4">
      
                        <h5 class="mdb-color-text font-weight-bold">Parcel Status</h5>
      
                      </div>
                      <div class="row justify-content-center">
                        <div class="barcode">
                        
                          {!! DNS1D::getBarcodeHTML($shipment->parcel_id, "C128",1.4,22) !!}
                          <p class="small text-center">{{$shipment->parcel_id}}</p>
                      </div>
                      </div>
                      
                      <hr>
                      <div class="row justify-content-center mb-2">
                        <div class="col-md-4">
                          <h6 class="font-weight-bold" ><i class="fas fa-box-open"></i> Parcel Informations</h6><hr>
                          <div class="small">
                            <span class="font-weight-bold"> Zone : </span><span>{{$shipment->zone}}</span><br>
                          <span class="font-weight-bold"> Description : </span><span>{{$shipment->details}}</span><br>
                          <span class="font-weight-bold"> Type : </span><span>{{$shipment->type}}</span><br>
                          <span class="font-weight-bold"> Delivery : </span><span>{{$shipment->delivery}}</span>
                          <hr>
                          </div>
                        </div>
                        <div class="col-md-4">
                          
                         
                        </div>
                        <div class="col-md-4">
                          <div class="row mb-4">
                            <h5>Status: &nbsp;</h5><h5 style="background-color:#c8e6c9; color:#1b5e20;padding:0.5%;" class="font-weight-bold">&nbsp; {{$shipment->status}} &nbsp;</h5>
                          </div>
                          <div class="row">
                            
                              
                                 <span class="h5 raleway">Charge : </span><span class="h5 font-weight-bold mdb-color-text"> &nbsp;{{$shipment->amount}}৳</span>
                              
                            
                           
                            
                          </div>
                        </div>
                      </div>
                     
                       
                      <div class="row justify-content-center mb-4">
                        <button onclick="goBack()" class="btn btn-unique">Check Again</button>
                      </div>
                       

                    </div>
                </div>
                @endforeach

            </div>
        </div>

  </div>
</div>

@section('scripts')
<script src="{{ asset('js/vendor/jquery.dataTables.min.js') }}"></script>
<script src="{{asset('js/vendor/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('js/vendor/admin.js')}}"></script>

<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable();
} );
</script>
<script> 
    
  function goBack() {
     window.history.back();
       }
</script>

@stop
@endsection
