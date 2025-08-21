<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sellers')->delete();
        
        \DB::table('sellers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'فروشگاه عرب',
                'shop_name' => 'فروشگاه عرب',
                'mobile' => 0,
                'phone' => 0,
                'description' => 'فروشگاه عرب',
                'address' => 'فروشگاه عرب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}