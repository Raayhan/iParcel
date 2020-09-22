@extends('layouts.app')
@section('pagetitle', 'All Branches')
@section('styles')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

<link href="{{ asset('css/vendor/admin.min.css') }}" rel="stylesheet">

@stop
@section('content')
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user-secret fa-sm"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Control Panel</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="/admin/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>DASHBOARD</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Manage
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-code-branch"></i>
          <span>BRANCH</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="/admin/branch/branches"><i class="fas fa-list-ul"></i> &nbsp;All Branches</a>
            <a class="collapse-item" href="/admin/branch/add"><i class="fas fa-calendar-plus"></i> &nbsp;Add Branch</a>
            
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-users"></i>
          <span>CUSTOMER</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class=" py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="\admin\customers"><i class="fas fa-list-ul"></i> &nbsp;All Customers</a>
            <a class="collapse-item" href="#"><i class="fas fa-user-plus"></i> &nbsp;Add Customer</a>
            <a class="collapse-item" href="#"><i class="fas fa-user-minus"></i> &nbsp;Remove Customer</a>
            
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Operations
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-dolly-flatbed"></i>
          <span>SHIPMENTS</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class=" py-2 collapse-inner rounded">
            <a class="collapse-item" href="#">All Shipments</a>
            <a class="collapse-item" href="#">View Status</a>
            <a class="collapse-item" href="#">Pickup Requests</a>
            <a class="collapse-item" href="#">Arrived Parcels</a>
            <a class="collapse-item" href="#">Shipped Parcels</a>
            
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Earnings</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-file-alt"></i>
          <span>Reports</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
     <div id="content">
       <!-- Begin Page Content -->
       <div class="container-fluid py-4">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 text-center">iParcel Branches</h1>
        

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Branch Informations</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%;text-align:center!important;">
                    <thead>
                        <tr>
                            <th>Branch</th>
                            <th>ID</th>
                            <th>Zone</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Completed <i class="far fa-check-circle"></i></th>
                            <th>Pending <i class="far fa-clock"></i></th>
                            <th>Earnings</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Gulshan</td>
                            <td>DHK101GSN</td>
                            <td>Dhaka</td>
                            <td>gulshan@iparcel.com</td>
                            <td>01675613100</td>
                            <td>33</td>
                            <td>4</td>
                            <td>৳ 3500.00</td>
                        </tr>
                        
                        <tr>
                          <td>Banani</td>
                          <td>DHK102BNI</td>
                          <td>Dhaka</td>
                          <td>banani@iparcel.com</td>
                          <td>01718521456</td>
                          <td>25</td>
                          <td>2</td>
                          <td>৳ 2700.00</td>
                        </tr>
                        <tr>
                          <td>Basundhara</td>
                          <td>DHK103BSD</td>
                          <td>Dhaka</td>
                          <td>basundhara@iparcel.com</td>
                          <td>01812541255</td>
                          <td>29</td>
                          <td>1</td>
                          <td>৳ 3150.00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                          <th>Branch</th>
                          <th>ID</th>
                          <th>Zone</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Completed <i class="far fa-check-circle"></i></th>
                          <th>Pending <i class="far fa-clock"></i></th>
                          <th>Earnings</th>
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
