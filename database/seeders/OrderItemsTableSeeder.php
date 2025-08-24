<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_items')->delete();
        
        \DB::table('order_items')->insert(array (
            0 => 
            array (
                'id' => 4,
                'quantity' => 1,
                'price' => 10000,
                'order_id' => 4,
                'product_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-08-24 09:20:22',
                'updated_at' => '2025-08-24 09:20:22',
            ),
            1 => 
            array (
                'id' => 5,
                'quantity' => 1,
                'price' => 10000,
                'order_id' => 4,
                'product_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-08-24 09:20:22',
                'updated_at' => '2025-08-24 09:20:22',
            ),
            2 => 
            array (
                'id' => 6,
                'quantity' => 1,
                'price' => 10000,
                'order_id' => 4,
                'product_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-08-24 09:20:22',
                'updated_at' => '2025-08-24 09:20:22',
            ),
        ));
        
        
    }
}