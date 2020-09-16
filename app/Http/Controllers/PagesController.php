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
        return view('customer.login');
    }
    public function AdminLogin(){
        return view('admin.login');
    }
   
}
