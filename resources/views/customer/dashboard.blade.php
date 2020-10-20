@extends('layouts.app')
@section('pagetitle', 'Dashboard')
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
      <li class="nav-item active">
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
      <li class="nav-item">
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

                 
                  @if (session('status'))
                       <div class="alert alert-success text-center" role="alert">
                            {{ session('status') }}
                       </div>
                  @endif
                  <!-- Content Row -->
                  <div class="row">
                    <div class="col-xl-3 col-md-6 mb-4">
                      <a onclick="window.location.href='/customer/parcel/all'"> <div class="card border-left-primary shadow h-100 py-2">
                         <div class="card-body">
                           <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Active</div>
                             <div class="h5 mb-0 font-weight-bold text-gray-800">{{$active}}</div>
                             </div>
                             <div class="col-auto">
                              <i class="fas fa-rocket fa-2x text-gray-500"></i>
                             </div>
                           </div>
                         </div>
                       </div>
                     </a>
                     </div>
         
                     
                     <div class="col-xl-3 col-md-6 mb-4">
                      <a onclick="window.location.href='/customer/parcel/all'"> <div class="card border-left-success shadow h-100 py-2">
                         <div class="card-body">
                           <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Completed</div>
                             <div class="h5 mb-0 font-weight-bold text-gray-800">{{$completed}}</div>
                             </div>
                             <div class="col-auto">
                               <i class="fas fa-check-circle fa-2x text-gray-500"></i>
                             </div>
                           </div>
                         </div>
                       </div>
                     </a>
                     </div>
         
                     
                     <div class="col-xl-3 col-md-6 mb-4">
                       <div class="card border-left-info shadow h-100 py-2">
                         <div class="card-body">
                           <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                               <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Balance</div>
                               <div class="row no-gutters align-items-center">
                                 <div class="col-auto">
                                 <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{Auth::guard('customer')->user()->balance}} ৳</div>
                                 </div>
                                
                               </div>
                             </div>
                             <div class="col-auto">
                               <i class="far fa-money-bill-alt fa-2x text-gray-500"></i>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
         
                     <!-- Pending Requests Card Example -->
                     <div class="col-xl-3 col-md-6 mb-4">
                       <div class="card border-left-danger shadow h-100 py-2">
                         <div class="card-body">
                           <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                               <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Due</div>
                             <div class="h5 mb-0 font-weight-bold text-gray-800">{{Auth::guard('customer')->user()->due}} ৳</div>
                             </div>
                             <div class="col-auto">
                               <i class="fas fa-comment-dollar fa-2x text-gray-500"></i>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                 </div>

                 <div class="row mb-4">
                   <div class="col-md-6">
                    <div class="card border-left-info shadow h-100 py-2">
                      <div class="card-body Poppins">
                        <h5 class="text-center mdb-color-text mb-4" style="margin-top:5%;">Want to send A Parcel ?<br><br><i class="fas fa-box-open fa-2x text-gray-500 mb-2"></i></h5>
                        <h6 class="small text-center mb-4">Send us a pickup request by filling up the parcel request form</h6>

                        <div class="row justify-content-center" style="padding-top:25px!important;">
                          <button   onclick="window.location.href='/customer/parcel/request'" class="btn btn-info btn-sm text-white" >Request Form</button>
                        </div>

                      </div>
                    </div>
                  
                   </div>
                   <div class="col-md-6">
                    <div class="card border-left-danger shadow h-100 py-2">
                      <div class="card-body Poppins">

                        <div class="row justify-content-center">

                          <h5>Coverage Area</h5>
                        </div>
                        <div class="row justify-content-center">
                          <img style="max-width:30%" src="{{asset('img/map.png')}}" alt="">
                         </div>
                         <div class="row justify-content-center">
                          <button   onclick="window.location.href='/customer/branch/all'" class="btn btn-danger btn-sm text-white" >Branches</button>
                        </div>
                      </div>
                    </div>
                  
                   </div>
                 </div>
                 <div class="row">
                  <div class="col-md-6">
                   <div class="card border-left-info shadow h-100 py-2">
                     <div class="card-body Poppins">
                       <h5 class="text-center mdb-color-text" style="margin-top:5%;">Pay your Charges with<br><br><i class="fas fa-money-check-alt fa-2x text-gray-500 mb-2"></i></h5>

                       <div class="row justify-content-center">
                        <img style="max-width:40%" src="{{asset('img/Bkash.svg')}}" alt="">
                       </div>
                      

                     </div>
                   </div>
                 
                  </div>
                  <div class="col-md-6">
                   <div class="card border-left-primary shadow h-100 py-2">
                     <div class="card-body Poppins">
                       <h6 class="text-center mdb-color-text mb-3">Delivery Charges</h6>

                       <div class="table-responsive">
                       <table class="table table-striped table-bordered table-sm small-table" style="text-align:center!important;">
                         <thead class="primary-color white-text text-xsmall">
                           <tr>
                             <th class="small-table" scope="col">Type/Delivery</th>
                             <th class="small-table" scope="col">Regular</th>
                             <th class="small-table" scope="col">Express</th>
                             <th class="small-table" scope="col">Super Express</th>
                           </tr>
                         </thead>
                         <tbody>
                           <tr>
                             <th class="small-table" scope="row">Small (< 5Kg)</th>
                             <td class="small-table">50.00</td>
                             <td class="small-table">80.00</td>
                             <td class="small-table">140.00</td>
                           </tr>
                           <tr>
                             <th class="small-table" scope="row">Medium (< 10Kg)</th>
                             <td class="small-table">70.00</td>
                             <td class="small-table">100.00</td>
                             <td class="small-table">160.00</td>
                           </tr>
                           <tr>
                             <th class="small-table" scope="row">Large (10Kg+)</th>
                             <td class="small-table">110.00</td>
                             <td class="small-table">140.00</td>
                             <td class="small-table">200.00</td>
                           </tr>
                         </tbody>
                       </table>
                     </div>
                     <div class="row justify-content-center">
                       <button   onclick="window.location.href='/customer/parcel/calculate'" class="btn btn-primary btn-sm text-white" >Calculate Charge</button>
                     </div>
                     </div>
                   </div>
                 
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
