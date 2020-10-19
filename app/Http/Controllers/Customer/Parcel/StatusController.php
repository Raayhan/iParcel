<?php

namespace App\Http\Controllers\Customer\Parcel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shipment;
use Illuminate\Support\Facades\DB;


class StatusController extends Controller
{
    public function ShowPage(){
        return view('customer.parcel.check');
    }

    public function ViewStatus(Request $request){
       
        $this->validator($request);
        $parcel_id = $request->input('parcel_id');


       
        $querry = Shipment::where('parcel_id', '=',$parcel_id)->select('id','parcel_id','sender_name','sender_phone','sender_address','recipient_name','recipient_phone','recipient_address','zone','created_at','type','delivery','details','status','amount')->first();
    
        if ($querry === null) {
            return redirect()->to('customer/parcel/check')->with('error','No record found with this ID');
        }
        else{
            $shipments = Shipment::where('parcel_id', '=',$parcel_id)->select('id','parcel_id','sender_name','sender_phone','sender_address','recipient_name','recipient_phone','recipient_address','zone','created_at','type','delivery','details','status','amount')->get(); 
        return view('customer.parcel.status',['shipments'=>$shipments]); 
        }
    }


    private function validator(Request $request)
    {
            //validation rules.
            $rules = [
                'parcel_id'      =>'required|numeric|min:12',
               
            ];

            //custom validation error messages.
            $messages = [
                
            ];

            //validate the request.
            $request->validate($rules,$messages);


    }
}
