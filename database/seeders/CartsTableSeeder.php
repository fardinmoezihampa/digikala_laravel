<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('Carts')->delete();

        \DB::table('Carts')->insert(array (
            0 =>
            array (
                'id' => 1,
                'product_id' => 1,
                'user_id' => 2,
                'quantity' => 1,
                'created_at' => '2025-08-21 08:31:19',
                'updated_at' => '2025-08-21 08:31:19',
            ),
            1 =>
            array (
                'id' => 2,
                'product_id' => 2,
                'user_id' => 2,
                'quantity' => 1,
                'created_at' => '2025-08-21 08:31:56',
                'updated_at' => '2025-08-21 08:31:56',
            ),
            2 =>
                array (
                    'id' => 3,
                    'product_id' => 5,
                    'user_id' => 2,
                    'quantity' => 1,
                    'created_at' => '2025-08-21 08:31:56',
                    'updated_at' => '2025-08-21 08:31:56',
                ),
        ));


    }
}
