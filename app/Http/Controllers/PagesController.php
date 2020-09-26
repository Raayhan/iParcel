<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Branch;
use App\Models\Customer;
class PagesController extends Controller
{
 
    //Index Page


    public function index(){
        if((Auth::guard('customer')->check())) {
            return redirect('/customer/dashboard');
        }
        elseif((Auth::guard('branch')->check())){
            return redirect('/branch/dashboard');
        }
        elseif((Auth::guard('admin')->check())){
             
            return redirect('/admin/dashboard');
        }
        else{
            return view('welcome');
        } 
        
    }


 
    //About Page


    public function about(){
       
        return view('pages.about');
    }


    // Services Page



    public function services(){
        
        return view('pages.services');
    }
    

    //Login Page



   public function login(){
        
            return view('login');
        } 
        
    
  
    
}
