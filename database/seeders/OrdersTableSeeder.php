<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 4,
                'amount' => 31500,
                'order_number' => 'Ref-17100ee2-b4cd-4d90-b92f-49a6bae1fb9c',
                'user_id' => 2,
                'payment_method_id' => 2,
                'delivery_method_id' => 1,
                'address_id' => 1,
                'status' => 'completed',
                'deleted_at' => NULL,
                'created_at' => '2025-08-24 09:20:22',
                'updated_at' => '2025-08-24 09:20:26',
            ),
        ));
        
        
    }
}