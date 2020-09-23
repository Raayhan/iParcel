<?php

namespace App\Http\Controllers\admin;

use App\Models\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;

class AddBranchController extends Controller
{
    public function BranchRegisterForm(){
        return view('admin.branch.add',[
            
            'registerRoute' => 'admin.branch.add',
           
        ]);
    }

    public function AddBranch(Request $request){

        $branch = new Branch;

        $password = $request->input('password');
        $hash = Hash::make($password);

        $branch->name = $request->input('name');
        $branch->email = $request->input('email');
        $branch->branch_id = $request->input('branch_id');
        $branch->zone = $request->input('zone');
        $branch->phone =$request->input('phone');
        $branch->password = $hash;
        $branch->save();
    
            
        
        return redirect()->to('/admin/branch/add')->with('status','New Branch Created Successfully');

    }
}
