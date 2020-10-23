@extends('layouts.app')
@section('pagetitle', 'All Parcels')
@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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

                            <!-- Page Heading -->
         <div class="card border-left-primary border-right-cool shadow mb-2 Poopins" style="padding:2%; background-color: #b5f2f721;">
            <h4 class="h4 text-center" style="padding-top:5px;">All Parcels</h4>
           </div>
                       
                        
                    <div class="card Poppins">
                        
                        <div class="card-body shipment_add">
                                        {{-- Success Alert --}}
                            @if(session('status'))
                            <div class="alert alert-success alert-dismissible fade show text-center font-weight-bold small" role="alert">
                                {{session('status')}} <i class="far fa-check-circle"></i>
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
                        
                        <div class="table-responsive">
                            <table id="example" class="table table-sm table-striped table-bordered" style="width:100%;text-align:center!important;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Recipient</th>
                                        <th>Zone</th>
                                        <th>Catagory</th>
                                        <th>Delivery</th>
                                        <th>Payment</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($shipments as $shipment)
                                   @foreach($orders as $order)
            
                                    <tr>
            
                                      <td>{{ $shipment->parcel_id }}</td>
                                      <td>{{ $shipment->created_at }}</td>
                                      <td><span style="background-color:#c8e6c9; color:#1b5e20;padding:0.5%;" class="font-weight-bold small">&nbsp; {{$shipment->status}} &nbsp;</span></td>
                                      <td>{{ $shipment->recipient_name }}</td>
                                      <td>{{ $shipment->zone }}</td>
                                      <td>{{ $shipment->type }}</td>
                                      <td>{{ $shipment->delivery }}</td>
                                      <td><span style="background-color:#c8e6c9; color:#1b5e20;padding:0.5%;" class="font-weight-bold">&nbsp; {{$order->payment_status}} &nbsp;</span></td>
                                      <td>
                                       
                                            <form action="/customer/parcel/view" method="GET">
                                          
                                              <input type="hidden" name="parcel_id" value="{{$shipment->parcel_id}}">
                                              <input class="btn btn-outline-primary btn-sm view_btn" title="View Details" type="submit" class="small" value="View">
                                          </form>
                                        </td>
                                        <td>
                                         
                                            <form action="/customer/parcel/all" method="POST">

                                              @csrf
                                              <input type="hidden" name="shipment_id" value="{{$shipment->id}}">
                                              <input type="hidden" name="order_id" value="{{$order->id}}">

                                              <input class="btn btn-outline-danger btn-sm delete_btn" title="Delete Request" type="submit" class="small" value="Delete">
                                          </form>
                                         
                                       
                                       
                                    </td>
            
                                    </tr>
            
                                      @endforeach
                                      @endforeach
                                   
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Recipient</th>
                                        <th>Zone</th>
                                        <th>Catagory</th>
                                        <th>Delivery</th>
                                        <th>Payment</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
            
                        </div>


                    
                            
                        </div>
                    </div>
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
   
    
@stop
@endsection
