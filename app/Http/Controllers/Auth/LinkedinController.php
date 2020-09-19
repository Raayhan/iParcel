<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\Models\User;

class LinkedinController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }
      
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleLinkedinCallback()
    {
        try {
    
            $user = Socialite::driver('linkedin')->user();
     
            $finduser = User::where('linkedin_id', $user->id)->first();
     
            if($finduser){
     
                Auth::login($finduser);
    
                return redirect('/customer/dashboard');
     
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'linkedin_id'=> $user->id,
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
