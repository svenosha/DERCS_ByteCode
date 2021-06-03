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
}
