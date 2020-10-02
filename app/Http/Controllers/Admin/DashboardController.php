<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Customer;
class DashboardController extends Controller
{
   


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $branch = Branch::count();
        $customer = Customer::count();
        $completed = Branch::sum('completed');
        $pending = Branch::sum('pending');
        return view('admin.dashboard',['branch'=>$branch,'customer'=>$customer,'completed'=>$completed,'pending'=>$pending]);
    }
}
