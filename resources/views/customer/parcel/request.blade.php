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

                 
                    <!-- Page Heading -->
         <div class="card border-left-primary border-right-cool shadow mb-2 Poopins" style="padding:2%; background-color: #b5f2f721;">
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
                      
                        <div class="col-md-6">
                          <div class="form-group">
                            <textarea id="details" class="form-control  @error('details') is-invalid @enderror" rows=2 type="text" name="details" placeholder="Parcel Description (What's inside,color,condition etc.)"autofocus></textarea>
                          
                            @error('details')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <textarea id="sender_address" class="form-control @error('sender_address') is-invalid @enderror" rows=2 type="text" name="sender_address" placeholder="Parcel Pickup Address"></textarea>
                            @error('sender_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          </div>
                        </div>
                     
                      
                     
                       

                     
                    </div>




                    <h5 class="font-weight-bold">Recipient Informations</h5><HR>
                      <div class="row register-form mb-2">

                        <div class="col-md-6">
                          <div class="form-group">
                            <input id="recipient_name" placeholder="Recipient Name" type="text" class="form-control @error('recipient_name') is-invalid @enderror" name="recipient_name" value="{{ old('recipient_name') }}"autocomplete="recipient_name">
                            @error('recipient_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          </div>
                          <div class="form-group">
                            <textarea id="recipient_address" class="form-control @error('recipient_address') is-invalid @enderror" rows=2 type="text" name="recipient_address" placeholder="Recipient Address"></textarea>
                          
                            @error('recipient_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          </div>
                          
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input id="recipient_phone" type="number"  name="recipient_phone" class="form-control @error('recipient_phone') is-invalid @enderror" placeholder="Recipient Phone"  />
                            @error('recipient_phone')
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
