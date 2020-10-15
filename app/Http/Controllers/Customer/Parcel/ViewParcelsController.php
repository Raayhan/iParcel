<?php

namespace App\Http\Controllers\Customer\Parcel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Shipment;
use Auth;
use Illuminate\Support\Facades\DB;
class ViewParcelsController extends Controller
{
   public function ViewAllParcel(){



       $phone = Auth::guard('customer')->user()->phone;
       $shipments = DB::table('shipments')->select('id','parcel_id','recipient_name','recipient_phone','recipient_address','zone','notes','created_at','type','delivery','details','status','amount')->where('sender_phone', '=',$phone)->get();

       return view('customer.parcel.all',['shipments'=>$shipments]); 
   }

   public function ViewParcel(Request $request){



    $parcel_id = $request->input('parcel_id');
    $shipments = DB::table('shipments')->select('id','parcel_id','sender_address','recipient_name','recipient_phone','recipient_address','zone','notes','created_at','type','delivery','details','status','amount')->where('parcel_id', '=',$parcel_id)->get();

    return view('customer.parcel.view',['shipments'=>$shipments]); 
} 
  
   
}
