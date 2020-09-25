<?php

namespace App\Http\Controllers\Customer\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\Models\Customer;


class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
      
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
    
            $customer = Socialite::driver('google')->user();
     
            $finduser = Customer::where('google_id', $customer->id)->first();
     
            if($finduser){
     
               
    
                return redirect('/customer/dashboard');
     
            }else{
                $newUser = Customer::create([
                    'name' => $customer->name,
                    'email' => $customer->email,
                    'google_id'=> $customer->id,
                    'password' => encrypt('123456dummy')
                ]);
                
                Auth::login($newUser);
     
                return redirect('/customer/dashboard');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
