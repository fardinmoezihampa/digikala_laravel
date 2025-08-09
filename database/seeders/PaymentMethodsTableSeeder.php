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
                'created_at' => '2025-08-09 09:29:11',
                'updated_at' => '2025-08-09 09:40:41',
            ),
        ));


    }
}
