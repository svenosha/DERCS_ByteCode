<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rider;
use App\Models\Cust;
use Illuminate\Support\Facades\DB;

class PickupandDeliveryController extends Controller
{
    //
    public function viewPendingList(Request $req){
        $id = Auth::id();
        $QuotationID = $req->id;
        $query = DB::select("select * from Quotations where id = '$QuotationID'");


        return view('RiderDeliverylist', compact('query'));
    }

    public function index() {
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
