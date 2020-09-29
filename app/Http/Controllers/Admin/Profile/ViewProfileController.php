<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;

class ViewProfileController extends Controller
{
    public function ViewProfile(){
        return view('admin.profile.view');
    }

    public function ChangeName(Request $request){
        
        $this->validator($request);
        $id = $request->input('id');
        $password = $request->input('password');
 

        $admin = Admin::findOrFail($id);

        if (Hash::check($password, $admin->password)) {
        
        $admin->name = $request->input('name');

        $admin->save();
        return redirect()->to('/admin/profile/view')->with('status','Changes Saved');

        }
        else {
            return redirect()->to('/admin/profile/view')->with('error','Incorrect Password');
        }
       
    }

    private function validator(Request $request)
    {
            //validation rules.
            $rules = [
                
                'password'     => 'required|min:6|max:255',
               
            ];

            //custom validation error messages.
            $messages = [
               
               
            ];

            //validate the request.
            $request->validate($rules,$messages);


    }
}
