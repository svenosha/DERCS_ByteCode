<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name'      =>  'rider1',
            'email'     =>  'rider@rider.com',
            'password'  =>  Hash::make('password'),
            'is_rider'=>'1',
            'phone'=>'0123435',
            'address'=>'no18 taman',  
            'AccStatus'=>'1',
            
        ]);
  
    }
}
