<?php

namespace App\Http\Controllers\Admin\Shipment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shipment;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    public function ShowRequest(){
        $shipments = DB::table('shipments')->select('id','parcel_id','sender_name','sender_phone','sender_address','recipient_name','recipient_phone','recipient_address','zone','created_at','type','delivery','details','status','amount')->where('status', '=','Requested,Pending Approval')->get();
    
        return view('admin.shipment.request',['shipments'=>$shipments]); 
    }


    public function RequestHandel(Request $request){

        if ($request->has('approve')) {
            
            $id = $request->input('id');
            $shipment = Shipment::findOrFail($id);

            $shipment->status = 'Approved';
            $shipment->save();
            return redirect()->to('/admin/shipment/request')->with('status','Request has been approved');


        }
        
        if ($request->has('decline')) {
            
            $id = $request->input('id');
            $shipment = Shipment::findOrFail($id);

            $shipment->status = 'Declined';
            $shipment->save();
            return redirect()->to('/admin/shipment/request')->with('error','Request has been declined');

        }


    }

   
}
