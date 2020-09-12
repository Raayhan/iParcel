@extends('layouts.app')
@section('pagetitle', 'Welcome')
@section('content')
<div class="container" style="height:70vh">
    <div class="row justify-content-center">
        <div class="col-md welcome">
            <div class="row justify-content-center">
                <img style="max-width:60%;margin-top:10%" class="animated slideInLeft mb-4" src="{{asset('img/front.png')}}" alt="">
            </div>
            
            <h3 class="text-secondary text-center animated zoomIn">Your Parcel Our Services</h3>
        </div>
        <div class="col-md welcome animated zoomIn text-center text-secondary" style="margin-top:10%">
            
            <h6>Welcome to</h6>
            <div class="row justify-content-center">
            
                <h1 class="text-danger mb-4">iParcel</h1>
            </div>
            
            <p>An advanced online digital parcel service</p>
            <div class="row justify-content-center">
                <button onclick="window.location.href='/login'" class="btn btn-indigo">LOGIN</button>
                <button onclick="window.location.href='/register'" class="btn btn-mdb-color">REGISTER</button>
            </div>
        </div>
    </div>
</div>

@endsection

