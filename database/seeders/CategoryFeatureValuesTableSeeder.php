<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryFeatureValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_feature_values')->delete();
        
        \DB::table('category_feature_values')->insert(array (
            0 => 
            array (
                'id' => 1,
                'value' => '۸.۶×۷۹×۱۶۲.۳ میلی‌متر',
                'category_feature_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-08-07 15:51:14',
                'updated_at' => '2025-08-07 15:51:14',
            ),
            1 => 
            array (
                'id' => 2,
                'value' => '۸.۶×80×۱50.۳ میلی‌متر',
                'category_feature_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-08-07 15:51:39',
                'updated_at' => '2025-08-07 15:51:39',
            ),
            2 => 
            array (
                'id' => 3,
                'value' => '204 گرم',
                'category_feature_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-08-07 15:52:26',
                'updated_at' => '2025-08-07 15:52:26',
            ),
            3 => 
            array (
                'id' => 4,
                'value' => '100 گرم',
                'category_feature_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-08-07 15:52:31',
                'updated_at' => '2025-08-07 15:52:31',
            ),
            4 => 
            array (
                'id' => 5,
            'value' => 'سایز نانو( ۸.۶×۱۶۲.۳ میلی‌متر)',
                'category_feature_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-08-07 15:54:03',
                'updated_at' => '2025-08-07 15:54:03',
            ),
            5 => 
            array (
                'id' => 6,
            'value' => 'سایز نانو (۸.۶×100.۳ میلی‌متر)',
                'category_feature_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-08-07 15:55:44',
                'updated_at' => '2025-08-07 15:56:38',
            ),
            6 => 
            array (
                'id' => 7,
                'value' => 'دو عدد',
                'category_feature_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-08-07 15:57:42',
                'updated_at' => '2025-08-07 15:57:42',
            ),
            7 => 
            array (
                'id' => 8,
                'value' => 'یک عدد',
                'category_feature_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-08-07 15:57:50',
                'updated_at' => '2025-08-07 15:57:50',
            ),
            8 => 
            array (
                'id' => 9,
                'value' => 'iPhone 16 CH',
                'category_feature_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-08-07 15:58:40',
                'updated_at' => '2025-08-07 15:58:40',
            ),
            9 => 
            array (
                'id' => 10,
                'value' => 'iPhone 13 CH',
                'category_feature_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-08-07 15:58:46',
                'updated_at' => '2025-08-07 15:58:46',
            ),
        ));
        
        
    }
}