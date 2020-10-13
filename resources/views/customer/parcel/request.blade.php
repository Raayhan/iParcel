@extends('layouts.app')
@section('pagetitle', 'New Parcel')
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
            <a class="collapse-item" href="/customer/parcel/live"><i class="fas fa-eye"></i> &nbsp;Live Status</a>
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

                 
                    <!-- Page Heading -->
         <div class="card mb-2" style="padding:2%; background-color: #37f2ff21;">
          <h4 class="h4 text-center" style="padding-top:5px;">Create Parcel Delivery Request</h4>
         </div>
         
            
          <div class="card Poppins">
            <div class="card-header font-weight-bold">Request Form</div>
              <div class="card-body branch_add">
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
          
                <form method="POST" action="/customer/parcel/request">
                @csrf
                  <h5 class="font-weight-bold">Parcel Informations</h5><HR>
                  <div class="row register-form mb-2">
                 
                     
                    
                      <div class="col-md-4">
                       
                          <div class="form-group">
                            <select class="form-control" name="zone"required>
                                <option class="hidden"  selected disabled>Select Zone</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Comilla">Comilla</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Barishal">Barishal</option>
                                <option value="Rangpur">Rangpur</option>
                                
                            </select>
                          </div>
                         
                        
                          
                      </div>
                      <div class="col-md-4">
                         
                        <div class="form-group">
                          <select class="form-control" name="delivery"required>
                            <option class="hidden"  selected disabled>Delivery Type</option>
                            <option value="Regular">Regular (10 Days)</option>
                            <option value="Express">Express (5 Days)</option>
                            <option value="Super Express">Super Express (2 Days)</option>
                            
                            
                        </select>
                          </div>
                        
                          
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select class="form-control" name="type"required>
                            <option class="hidden"  selected disabled>Parcel Type</option>
                            <option value="Small">Small (< 5Kg)</option>
                            <option value="Medium">Medium (< 10Kg)</option>
                            <option value="Large">Large (10Kg+)</option>
                            
                            
                        </select>
                        </div>
                         
                       
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <textarea class="form-control" rows=3 type="text" name="details" placeholder="Parcel Description (What's inside,color,condition etc.)"autofocus></textarea>
                        </div>
                      </div>
                     
                       

                     
                    </div>

                    <div class="row register-form mb-4">
                      <div class="col">
                        <button type="button" class="btn btn-default btn-sm text-white" data-toggle="modal" data-target="#basicExampleModal">
                          View Delivery Charges
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content Poppins">
                            <div class="modal-header text-center">
                              <h5 class="modal-title font-weight-bold small" id="exampleModalLabel">Delivery Charges</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              
                                
                                
                                  <table class="table table-striped table-bordered table-sm" style="text-align:center!important;">
                                    <thead class="primary-color white-text">
                                      <tr>
                                        <th scope="col">Type/Delivery</th>
                                        <th scope="col">Regular</th>
                                        <th scope="col">Express</th>
                                        <th scope="col">Super Express</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">Small (< 5Kg)</th>
                                        <td>50.00</td>
                                        <td>80.00</td>
                                        <td>140.00</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Medium (< 10Kg)</th>
                                        <td>70.00</td>
                                        <td>100.00</td>
                                        <td>160.00</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Large (10Kg+)</th>
                                        <td>110.00</td>
                                        <td>140.00</td>
                                        <td>200.00</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">CLOSE</button>
                              
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>
                   
                  </div>


                    <h5 class="font-weight-bold">Recipient Informations</h5><HR>
                      <div class="row register-form mb-2">

                        <div class="col-md-6">
                          <div class="form-group">
                            <input id="name" placeholder="Recipient Name" type="text" class="form-control @error('name') is-invalid @enderror" name="recipient_name" value="{{ old('name') }}" required autocomplete="name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" rows=2 type="text" name="recipient_address" placeholder="Recipient Address"></textarea>
                          </div>
                          
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="number"  name="recipient_phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Recipient Phone"  />
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" rows=2 type="text" name="notes" placeholder="Notes (Optional)"></textarea>
                          </div>
                        </div>
                       <input type="hidden" name="sender_name" value="{{Auth::guard('customer')->user()->name}}">
                       <input type="hidden" name="sender_phone" value="{{Auth::guard('customer')->user()->phone}}">
                       <input type="hidden" name="sender_address" value="{{Auth::guard('customer')->user()->address}}">

                      </div>
                    <div class="d-flex flex-row-reverse">
                      <div class="p-6">
                       
                          <input type="submit" class="btn btn-unique" style="margin-top:20%;"  value="SUBMIT"/>
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
