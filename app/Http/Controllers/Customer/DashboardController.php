<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Shipment;
use Auth;
class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $phone= Auth::guard('customer')->user()->phone;
        $completed = Shipment::where(['sender_phone'=> $phone,'status'=>'Received'])->count(); 
        $active = Shipment::where(['sender_phone'=> $phone])->whereNotIn('status', ['Received'])->count();
        
        return view('customer.dashboard',['active'=>$active,'completed'=>$completed]);
    }
}
