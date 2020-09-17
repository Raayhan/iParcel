<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class PagesController extends Controller
{
    public function index(){
        if(Auth::check()) {
            return view('customer.dashboard');
        }
        elseif((Auth::guard('branch')->check())){
            return view('branch.dashboard');
        }
        elseif((Auth::guard('admin')->check())){
            return view('admin.dashboard');
        }
        else{
            return view('welcome');
        } 
        
    }
    public function about(){
       
        return view('pages.about');
    }

    public function services(){
        
        return view('pages.services');
    }
    public function CustomerLogin(){
        if(Auth::check()) {
            return view('customer.dashboard');
        }
        else{
            return view('customer.login');
        }
       
    }
    
}
