<?php

namespace App\Http\Controllers\Customer\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
class CompleteProfileController extends Controller
{
    
    public function CompleteForm()
    {   
        
        return view('customer.profile.complete');
    }

    public function CompleteProfile(Request $request)
    {

        $this->validator($request);

        $id = $request->input('id');
        
        $customer = Customer::findOrFail($id);

        $customer->phone = $request->input('phone');
        $customer->address = $request->input('address');
       

        $customer->save();

        return redirect()->to('/customer/dashboard')->with('status','Profile Updated');
    }
   
    private function validator(Request $request)
    {
            //validation rules.
            $rules = [
                
                'phone'     => 'required|string|unique:customers|min:11|max:11',
                'address'     => 'required|string|min:15|max:255',
            ];

            //custom validation error messages.
            $messages = [
               
                'phone.unique' => 'Phone number already exists',
            ];

            //validate the request.
            $request->validate($rules,$messages);


    }

}
