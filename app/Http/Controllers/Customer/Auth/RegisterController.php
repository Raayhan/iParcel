<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Branch;
use App\Models\Admin;
use Hash;
use Auth;

class RegisterController extends Controller
{
    
    public function CustomerRegisterForm(){
       
       
        if((Auth::guard('customer')->check())){
            return redirect()
            ->intended(route('customer.dashboard'))
            ->with('status','You are already registered as Customer!');
        }
        elseif((Auth::guard('branch')->check())){
            return redirect()
            ->intended(route('branch.dashboard'))
            ->with('status','You are logged in as a Branch.');
        }
        elseif((Auth::guard('admin')->check())){
            return redirect()
            ->intended(route('admin.dashboard'))
            ->with('status','You are logged in as an Admin.');
        }
    
    else{
      

      
      
        return view('customer.register',[
            
            'registerRoute' => 'customer.register',
           
        ]);
    }
    }
    public function RegisterCustomer(Request $request){

        $this->validator($request);


        $customer = new Customer;

        //Making the password Hashed
        $password = $request->input('password');
        $hash = Hash::make($password);

        // Insering data into database 

        $customer->name      = $request->input('name');
        $customer->email     = $request->input('email');
        $customer->phone     = $request->input('phone');
        $customer->address   = $request->input('address');
        $customer->password  = $hash;
        $customer->save();
    
          //redirect to page  
        
        return redirect()->to('/customer/dashboard')->with('status','Customer Registered Successfully');

    }
    private function validator(Request $request)
    {
            //validation rules.
            $rules = [
                'name'      => 'required|string|min:3|max:191',
                'email'     => 'required|email|unique:customers|min:5|max:191',
                'password'  => 'required|string|confirmed|min:6|max:255',
                'address'   => 'required|string|min:15|max:255',
                'phone'     => 'required|string|unique:customers|min:11|max:11',
            ];

            //custom validation error messages.
            $messages = [
                
                'email.unique' => 'Email already exists',
                'phone.unique' => 'Phone already exists',
            ];

            //validate the request.
            $request->validate($rules,$messages);


    }
   




}
