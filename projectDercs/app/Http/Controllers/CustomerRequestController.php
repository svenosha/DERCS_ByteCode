<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Quotation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CustomerRequestController extends Controller
{
    //save customer request into databse
    public function CustRequest(Request $req){
        $userID = $req -> id;
        $name = $req -> name;
        $address = $req -> address;
        $phone = $req -> phone;

        $add = new quoatation;
        $add -> userID = $req -> id;
        
        $add -> DeviceModel = $req -> DeviceModel;
        $add -> DeviceColor = $req -> DeviceColor;
        $add -> DeviceSymptom = $req -> DeviceSymptom;
        $add -> DeviceDamage = $req -> DeviceDamage;
        $add -> DeviceModel = $req -> DeviceModel;
        $add -> save();

        $user = new user;
        $user -> userID = $userID;
        $user -> address = $address;
        $user -> phone = $phone;
        $user -> name = $name;
        $user -> save();


        return redirect()->back() ->with('alert', ' Your Request has been send to the staff!');
    }

    public function CustQuote(){
        $id = Auth::id();
        $info = DB::select("select * from users where id = '$id'");
        $data = DB::select("select * from items where itemid = '$itemid'");

        return view('ViewQuotation', compact('info','data'));
    }

    //to view the specific customer quotation information and update whether the staff accpet 
    //or reject request 
    public function acceptCustRequest(Request $req){
        $id = Auth::id();
        $QuotationID = $req->id;
        $data = DB::select("select * from _Quotations where id = '$QuotationID'");
        $status = $req->status;
        $updateStatus = DB::select("update _Quotations set QuotationStatus='$status' where id = '$QuotationID'");

        return view('ViewDetails', compact('data','updateStatus'));
    }

    //view request quotation list
    public function viewCustQuote(){
        $id = Auth::id();
        $info = DB::select("select * from users where id = '$id'");

        return view('RequestQuotationlist', compact('info'));
    }
}
