<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('addresses')->delete();
        
        \DB::table('addresses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'mobile' => '09192873192',
                'postal_code' => '3431633138',
                'address' => 'قزوین-الوند-کوچه شهدا-پلاک 305',
                'country_id' => 1,
                'state_id' => 18,
                'city_id' => 155,
                'user_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-08-23 20:00:35',
                'updated_at' => '2025-08-23 20:00:35',
            ),
            1 => 
            array (
                'id' => 2,
                'mobile' => '09192873333',
                'postal_code' => '3431633120',
                'address' => 'تهران-عبدل آباد -خیابان نادری-کوچه امیر امجد -پلاک 300',
                'country_id' => 1,
                'state_id' => 8,
                'city_id' => 65,
                'user_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-08-23 20:01:45',
                'updated_at' => '2025-08-23 20:01:45',
            ),
            2 => 
            array (
                'id' => 3,
                'mobile' => '09192873192',
                'postal_code' => '3431633138',
                'address' => 'شیراز-تخت جمشید-نرسیده به خ کورش -پلاک 200',
                'country_id' => 1,
                'state_id' => 17,
                'city_id' => 144,
                'user_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-08-23 20:03:48',
                'updated_at' => '2025-08-23 20:03:48',
            ),
        ));
        
        
    }
}