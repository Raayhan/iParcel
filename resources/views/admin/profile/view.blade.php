@extends('layouts.app')
@section('pagetitle', 'Profile')
@section('styles')
<link href="{{ asset('css/vendor/admin.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
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
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Branch" aria-expanded="true" aria-controls="Branch">
          <i class="fas fa-fw fa-code-branch"></i>
          <span>BRANCH</span>
        </a>
        <div id="Branch" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="/admin/branch/branches"><i class="fas fa-list-ul"></i> &nbsp;All Branches</a>
            <a class="collapse-item" href="/admin/branch/add"><i class="fas fa-calendar-plus"></i> &nbsp;Add Branch</a>
            
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Customer" aria-expanded="true" aria-controls="Customer">
          <i class="fas fa-fw fa-users"></i>
          <span>CUSTOMER</span>
        </a>
        <div id="Customer" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class=" py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="\admin\customer\customers"><i class="fas fa-list-ul"></i> &nbsp;All Customers</a>
            <a class="collapse-item" href="\admin\customer\add"><i class="fas fa-user-plus"></i> &nbsp;Add Customer</a>
            <a class="collapse-item" href="\admin\customer\block"><i class="fas fa-user-times"></i> &nbsp;Block Customer</a>
            
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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Shipment" aria-expanded="true" aria-controls="Shipment">
          <i class="fas fa-dolly-flatbed"></i>
          <span>SHIPMENTS</span>
        </a>
        <div id="Shipment" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class=" py-2 collapse-inner rounded">
            <a class="collapse-item" href="\admin\shipment\all"><i class="fas fa-list-ul"></i> &nbsp;All Shipments</a>
            <a class="collapse-item" href="\admin\shipment\live"><i class="fas fa-eye"></i> &nbsp;Live Status</a>
            <a class="collapse-item" href="\admin\shipment\request"><i class="fas fa-truck-pickup"></i> &nbsp;Pickup Requests</a>
            <a class="collapse-item" href="\admin\shipment\arrived"><i class="fas fa-download"></i> &nbsp;Arrived Parcels</a>
            <a class="collapse-item" href="\admin\shipment\shipped"><i class="fas fa-calendar-check"></i> &nbsp;Shipped Parcels</a>
            
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="\admin\earnings">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>EARNINGS</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Account" aria-expanded="true" aria-controls="Account">
          <i class="fas fa-user-secret"></i>
          <span>ACCOUNT</span></a>
          <div id="Account" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class=" py-2 collapse-inner rounded">
              <a class="collapse-item" href="\admin\profile\view"><i class="fas fa-user-cog"></i> &nbsp;Account Settings</a>
              
              
              
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

        
 <!-- Content Row -->

        <!-- Begin Page Content -->
            <div class="container-fluid py-4">
              <section class="section about-section gray-bg mb-4" id="about">
                <div class="container">
                    






                    <div class="counter">
                        <div class="row">
                            <div class="col-6 col-lg-3">
                                <div class="count-data text-center">
                                    <h6 class="count h5" data-to="500" data-speed="500">500.00৳</h6>
                                    <p class="m-0px font-w-600">Earnings</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="count-data text-center">
                                    <h6 class="count h5" data-to="150" data-speed="150">150.00৳</h6>
                                    <p class="m-0px font-w-600">Due</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="count-data text-center">
                                    <h6 class="count h5" data-to="850" data-speed="850">850</h6>
                                    <p class="m-0px font-w-600">Completed</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="count-data text-center">
                                    <h6 class="count h5" data-to="190" data-speed="190">190</h6>
                                    <p class="m-0px font-w-600">Pendings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section about-section gray-bg" id="about">
             
              <div class="container">

                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Update Account</h6>
                    
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <form role="form" action="#" method="POST" style="padding-left:10%;padding-right:10%;padding-top:5%;">
                      <div class="form-group row">
                          <label class="col-lg-3 col-form-label form-control-label">Name</label>
                          <div class="col-lg-9">
                              <input class="form-control" name="name" type="text" value= {{Auth::guard('admin')->user()->name}}>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-lg-3 col-form-label form-control-label">Email</label>
                          <div class="col-lg-9">
                              <input class="form-control" name="email" type="email" value={{Auth::guard('admin')->user()->email}}>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-lg-3 col-form-label form-control-label">New Password</label>
                          <div class="col-lg-9">
                              <input class="form-control" name="newpassword" type="password" >
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-lg-3 col-form-label form-control-label">Confirm Password</label>
                          <div class="col-lg-9">
                              <input class="form-control" name="newpassword-confirm" type="password">
                          </div>
                      </div>
                     
                      <div class="form-group row">
                          <label class="col-lg-3 col-form-label form-control-label"></label>
                          <div class="col-lg-9">
                              <input type="reset" class="btn btn-indigo Mybutton" value="Cancel">
                              <a class="btn btn-unique Mybutton" data-toggle="modal" data-target="#Confirm">Save Changes</a>
                          
                              <div class="modal fade" id="Confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header text-center">
                                          <h4 class="modal-title h5 w-100 font-weight-bold text-danger">Confirm Idendity</h4>
                                         
                                        </div>
                                        <div class="modal-body mx-3">
                                         

                                          <div class="form-group row justify-content-center" style="padding-top:3%;">
                                          
                                            
                                                <input class="form-control" name="password" type="password" placeholder="Enter Current Password">
                                           
                                        </div>
                                        <input style="float:right;" type="submit" class="btn btn-unique Mybutton" value="Confirm">

                                        </div>
                                       
                                      </div>
                                    </div>
                                  </div>
                          

                          
                          
                          
                            </div>
                      </div>
                  </form>
                   
                  </div>
                </div>
              </div>
            </section>
              </div>
    
  
        






      </div>
      <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  @section('scripts')
    <script src="{{asset('js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/vendor/admin.js')}}"></script>
    
    
@stop
@endsection