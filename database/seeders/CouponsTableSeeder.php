<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('coupons')->delete();

        \DB::table('coupons')->insert(array (
            0 =>
            array (
                'id' => 1,
                'code' => 'salam',
                'type' => 'fixed',
                'value' => 10000,
                'limit' => 1,
                'min_purchase' => 1000,
                'expires_at' => '2025-08-23 23:58:57',
                'is_active' => 1,
                'user_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
