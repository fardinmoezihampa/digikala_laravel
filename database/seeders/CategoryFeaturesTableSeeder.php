<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryFeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_features')->delete();
        
        \DB::table('category_features')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ابعاد',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-08-07 15:47:08',
                'updated_at' => '2025-08-07 15:47:08',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'وزن',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-08-07 15:47:14',
                'updated_at' => '2025-08-07 15:47:14',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'توضیحات سیم کارت',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-08-07 15:47:29',
                'updated_at' => '2025-08-07 15:47:29',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'تعداد سیم کارت',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-08-07 15:47:40',
                'updated_at' => '2025-08-07 15:47:40',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'مدل',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-08-07 15:47:47',
                'updated_at' => '2025-08-07 15:47:47',
            ),
        ));
        
        
    }
}