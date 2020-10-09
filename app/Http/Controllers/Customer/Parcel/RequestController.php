<?php

namespace App\Http\Controllers\Customer\Parcel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class RequestController extends Controller
{
    
    public function ViewRequestForm()
    {   
        
        return view('customer.parcel.request');
    }

    public function ViewConfirmation(Request $request){
        
        //$this->validator($request);

        $sender_name    = $request->input('sender_name');
        $sender_phone   = $request->input('sender_phone');
        $sender_address = $request->input('sender_address');

        $recipient_name    = $request->input('recipient_name');
        $recipient_phone   = $request->input('recipient_phone');
        $recipient_address = $request->input('recipient_address');
        $notes             = $request->input('notes');


        $zone     = $request->input('zone');
        $delivery = $request->input('delivery');
        $type     = $request->input('type');
        $details  = $request->input('details');

        $amount = "";
        $type_value = "";

        if($type == "Small"){
            $type_value = 20.00;

        }
        elseif($type == "Medium"){
            $type_value = 40.00;
        }
        else{
            $type_value = 80.00;
        }

        $delivery_value = "";

        if($delivery == "Regular"){
            $delivery_value = 30.00;

        }
        elseif($delivery == "Express"){
            $delivery_value = 60.00;
        }
        else{
            $delivery_value = 70.00;
        }


        $amount = $type_value + $delivery_value;
        return view('customer.parcel.confirm',['sender_name'=>$sender_name,
                                               'sender_phone'=>$sender_phone,
                                               'sender_address'=>$sender_address,
                                               'recipient_name'=>$recipient_name,
                                               'recipient_phone'=>$recipient_phone,
                                               'recipient_address'=>$recipient_address,
                                               'notes'=>$notes,
                                               'zone'=>$zone,
                                               'delivery'=>$delivery,
                                               'type'=>$type,
                                               'details'=>$details,
                                               'amount'=>$amount]);




    }

}
