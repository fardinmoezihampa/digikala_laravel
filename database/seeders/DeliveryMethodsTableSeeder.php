<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeliveryMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('delivery_methods')->delete();

        \DB::table('delivery_methods')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'متد اول',
                'price' => 10000,
                'created_at' => '2025-08-09 05:01:11',
                'updated_at' => '2025-08-09 05:01:11',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'متد دوم',
                'price' => 20000,
                'created_at' => '2025-08-09 05:01:22',
                'updated_at' => '2025-08-09 05:01:22',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'متد سوم',
                'price' => 50000,
                'created_at' => '2025-08-09 05:01:33',
                'updated_at' => '2025-08-09 05:01:56',
            ),
        ));


    }
}
