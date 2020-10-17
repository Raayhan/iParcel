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
        $parcel_id = $request->input('parcel_id');
       
        $shipments = DB::table('shipments')->select('id','parcel_id','sender_name','sender_phone','sender_address','recipient_name','recipient_phone','recipient_address','zone','created_at','type','delivery','details','status','amount')->where('parcel_id', '=',$parcel_id)->get();
    
        return view('customer.parcel.status',['shipments'=>$shipments]); 
    }
}
