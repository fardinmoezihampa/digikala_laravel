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
                'name' => 'پست پیشتاز',
                'price' => 1000,
                'created_at' => '2025-08-09 05:01:11',
                'updated_at' => '2025-08-22 08:43:25',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'پست سفارشی',
                'price' => 1000,
                'created_at' => '2025-08-09 05:01:22',
                'updated_at' => '2025-08-22 08:43:53',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'تیپاکس',
                'price' => 1000,
                'created_at' => '2025-08-09 05:01:33',
                'updated_at' => '2025-08-22 08:44:26',
            ),
        ));


    }
}
