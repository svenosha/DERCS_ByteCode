<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class QuotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('quotations')->insert([
          'id'      =>  '1',
            'DateRequest'     =>  '2/6',
            'QuotationStatus'  =>  'Accepted',
            'QuotationNote'=>'abc',
            'ServiceType'=>'Pickup',
            'PickupStatus'=>'Pending', 
            'DeliveryStatus'  =>  'Pending',
            'PickupEvidence'=>'abc',
            'DeliveryEvidence'=>'Evidence',
            'CODEvidence'=>'abc',
            'DeviceModel'  =>  'asus',
            'RepairPrice'=>'30',
            'DeviceColor'=>'Grey',
            'DeviceDamage'=>'broken speaker',
            'DeviceSymptom'  =>  'Sound not clear',
            'RepairStatus'=>'Pending',
            'RepairDetails'=>'abc',
            'TrackPickup'=>'Pending',
            'TrackDelivery'=>'Pending', 

           
        ]);
 */
DB::table('quotations')->insert([
    'id'      =>  '2',
      'DateRequest'     =>  '2/6',
      'QuotationStatus'  =>  'Accepted',
      'QuotationNote'=>'abc',
      'ServiceType'=>'Pickup',
      'PickupStatus'=>'Pending', 
      'DeliveryStatus'  =>  'Pending',
      'PickupEvidence'=>'abc',
      'DeliveryEvidence'=>'Evidence',
      'CODEvidence'=>'abc',
      'DeviceModel'  =>  'asus',
      'RepairPrice'=>'30',
      'DeviceColor'=>'Grey',
      'DeviceDamage'=>'broken speaker',
      'DeviceSymptom'  =>  'Sound not clear',
      'RepairStatus'=>'Pending',
      'RepairDetails'=>'abc',
      'TrackPickup'=>'Pending',
      'TrackDelivery'=>'Pending', 

     
  ]);
  
    }
}
