<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payments')->delete();
        
        \DB::table('payments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_id' => 4,
                'user_id' => 2,
                'amount' => 31500,
                'order_number' => 'Ref-17100ee2-b4cd-4d90-b92f-49a6bae1fb9c',
                'refNumber' => NULL,
                'cardNumber' => NULL,
                'status' => 'completed',
                'deleted_at' => NULL,
                'created_at' => '2025-08-24 09:20:22',
                'updated_at' => '2025-08-24 09:20:26',
            ),
        ));
        
        
    }
}