<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('payment_methods')->delete();

        \DB::table('payment_methods')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'زرین پال',
                'merchent_id' => 'a5546dae-e02a-427b-94d5-2b624c108958',
                'is_active' => 0,
                'created_at' => '2025-08-09 09:29:11',
                'updated_at' => '2025-08-09 09:40:41',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'zibal',
                'merchent_id' => 'zibal',
                'is_active' => 1,
                'created_at' => '2025-08-23 16:27:17',
                'updated_at' => '2025-08-23 16:27:17',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'payping',
                'merchent_id' => 'payping',
                'is_active' => 0,
                'created_at' => '2025-08-23 16:27:39',
                'updated_at' => '2025-08-23 16:27:39',
            ),
        ));


    }
}
