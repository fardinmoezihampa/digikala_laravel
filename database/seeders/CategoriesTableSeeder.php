<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 10,
                'name' => 'موبایل',
                'category_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:04:43',
                'updated_at' => '2025-08-18 16:15:28',
            ),
            1 => 
            array (
                'id' => 11,
                'name' => 'لپ تاپ',
                'category_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:04:51',
                'updated_at' => '2025-08-18 16:15:21',
            ),
            2 => 
            array (
                'id' => 12,
                'name' => 'لوازم خانگی',
                'category_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:05:00',
                'updated_at' => '2025-08-18 10:05:00',
            ),
            3 => 
            array (
                'id' => 13,
                'name' => 'گوشی هوشمند',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:05:28',
                'updated_at' => '2025-08-18 10:05:28',
            ),
            4 => 
            array (
                'id' => 14,
                'name' => 'لوازم جانبی موبایل',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:05:48',
                'updated_at' => '2025-08-18 10:05:48',
            ),
            5 => 
            array (
                'id' => 15,
                'name' => 'لپ تاپ گیمینگ',
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:06:19',
                'updated_at' => '2025-08-18 10:06:19',
            ),
            6 => 
            array (
                'id' => 16,
                'name' => 'لپ تاپ اداری',
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:06:39',
                'updated_at' => '2025-08-18 10:06:39',
            ),
            7 => 
            array (
                'id' => 17,
                'name' => 'یخچال',
                'category_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:06:59',
                'updated_at' => '2025-08-18 10:06:59',
            ),
            8 => 
            array (
                'id' => 18,
                'name' => 'ماشین لباسشویی',
                'category_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:07:18',
                'updated_at' => '2025-08-18 10:07:18',
            ),
            9 => 
            array (
                'id' => 19,
                'name' => 'هدفون و هندزفری',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:07:48',
                'updated_at' => '2025-08-18 17:11:17',
            ),
            10 => 
            array (
                'id' => 20,
                'name' => 'پاور بانگ',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:08:03',
                'updated_at' => '2025-08-18 17:11:36',
            ),
            11 => 
            array (
                'id' => 21,
                'name' => 'تلویزیون',
                'category_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:08:16',
                'updated_at' => '2025-08-18 17:11:55',
            ),
        ));
        
        
    }
}