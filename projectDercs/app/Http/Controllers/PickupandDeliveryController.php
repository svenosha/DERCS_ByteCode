<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rider;
use App\Models\Cust;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PickupandDeliveryController extends Controller
{
    //to view all customer information in Rider Delivery List Interface
    public function viewPendingList(Request $req){
        $id = Auth::id();
        $QuotationID = $req->id;
        $pending = DB::select("select * from _Quotations where id = '$QuotationID'");
        

        return view('RiderDeliverylist', compact('pending'));
    }

    //to view the specific customer delivery information and update whether the rider accpet 
    //or reject request 
    public function viewDelInfo(Request $req){
        $id = Auth::id();
        $QuotationID = $req->id;
        $data = DB::select("select * from _Quotations where id = '$QuotationID'");
        $status = $req->status;
        $updateStatus = DB::select("update _Quotations set DeliveryStatus='$status' where id = '$QuotationID'");
        


        return view('RiderDeliveryStatus', compact('data','updateStatus'));
    }

    //to upload the image as evidence
    public function DeliveryEvidence() {
        return view('uploadfile');
     }
     public function showUploadFile(Request $request) {
        $file = $request->file('image');
     
        //Display File Name
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';
     
        //Display File Extension
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';
     
        //Display File Real Path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';
     
        //Display File Size
        echo 'File Size: '.$file->getSize();
        echo '<br>';
     
        //Display File Mime Type
        echo 'File Mime Type: '.$file->getMimeType();
     
        //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());

    } 
}
