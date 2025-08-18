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
                'id' => 6,
                'name' => 'برند',
                'category_id' => 13,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:08:52',
                'updated_at' => '2025-08-18 10:08:52',
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'حافظه داخلی',
                'category_id' => 13,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:09:01',
                'updated_at' => '2025-08-18 10:09:01',
            ),
            2 => 
            array (
                'id' => 8,
                'name' => 'سیستم عامل',
                'category_id' => 13,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:09:07',
                'updated_at' => '2025-08-18 10:09:07',
            ),
            3 => 
            array (
                'id' => 9,
                'name' => 'برند',
                'category_id' => 15,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:11:13',
                'updated_at' => '2025-08-18 10:11:21',
            ),
            4 => 
            array (
                'id' => 10,
                'name' => 'RAM',
                'category_id' => 15,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:11:33',
                'updated_at' => '2025-08-18 10:11:33',
            ),
            5 => 
            array (
                'id' => 11,
                'name' => 'ظرفیت حافظه',
                'category_id' => 15,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:11:46',
                'updated_at' => '2025-08-18 10:11:46',
            ),
            6 => 
            array (
                'id' => 12,
                'name' => 'برند',
                'category_id' => 16,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:14:00',
                'updated_at' => '2025-08-18 10:14:06',
            ),
            7 => 
            array (
                'id' => 13,
                'name' => 'RAM',
                'category_id' => 16,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:14:16',
                'updated_at' => '2025-08-18 10:14:16',
            ),
            8 => 
            array (
                'id' => 14,
                'name' => 'ظرفیت حافظه',
                'category_id' => 16,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:14:32',
                'updated_at' => '2025-08-18 10:14:32',
            ),
            9 => 
            array (
                'id' => 15,
                'name' => 'برند',
                'category_id' => 17,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:17:22',
                'updated_at' => '2025-08-18 10:17:22',
            ),
            10 => 
            array (
                'id' => 16,
            'name' => 'ظرفیت(لیتر)',
                'category_id' => 17,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:17:32',
                'updated_at' => '2025-08-18 10:17:32',
            ),
            11 => 
            array (
                'id' => 17,
                'name' => 'برند',
                'category_id' => 18,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:19:06',
                'updated_at' => '2025-08-18 10:19:06',
            ),
            12 => 
            array (
                'id' => 18,
            'name' => 'ظرفیت شستشو(KG)',
                'category_id' => 18,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:19:24',
                'updated_at' => '2025-08-18 10:19:24',
            ),
            13 => 
            array (
                'id' => 19,
                'name' => 'نوع دستگاه',
                'category_id' => 19,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:20:46',
                'updated_at' => '2025-08-18 10:20:46',
            ),
            14 => 
            array (
                'id' => 20,
                'name' => 'نوع باتری',
                'category_id' => 20,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:21:19',
                'updated_at' => '2025-08-18 10:21:19',
            ),
            15 => 
            array (
                'id' => 21,
                'name' => 'برند',
                'category_id' => 21,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:21:56',
                'updated_at' => '2025-08-18 10:21:56',
            ),
            16 => 
            array (
                'id' => 22,
                'name' => 'سایز صفحه نمایش',
                'category_id' => 21,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:22:06',
                'updated_at' => '2025-08-18 10:22:06',
            ),
            17 => 
            array (
                'id' => 23,
                'name' => 'نوع پنل',
                'category_id' => 21,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:22:13',
                'updated_at' => '2025-08-18 10:22:13',
            ),
            18 => 
            array (
                'id' => 24,
                'name' => 'نوع گوشی موبایل',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 15:58:17',
                'updated_at' => '2025-08-18 15:58:17',
            ),
            19 => 
            array (
                'id' => 25,
                'name' => 'دسته ‌بندی',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 15:58:35',
                'updated_at' => '2025-08-18 15:58:35',
            ),
            20 => 
            array (
                'id' => 26,
                'name' => 'مدل',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 15:58:42',
                'updated_at' => '2025-08-18 15:58:42',
            ),
            21 => 
            array (
                'id' => 27,
                'name' => 'زمان معرفی',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 15:58:48',
                'updated_at' => '2025-08-18 15:58:48',
            ),
            22 => 
            array (
                'id' => 28,
                'name' => 'ابعاد',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 15:58:59',
                'updated_at' => '2025-08-18 15:58:59',
            ),
            23 => 
            array (
                'id' => 29,
                'name' => 'وزن',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 15:59:04',
                'updated_at' => '2025-08-18 15:59:04',
            ),
            24 => 
            array (
                'id' => 30,
                'name' => 'تعداد سیم کارت',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 15:59:19',
                'updated_at' => '2025-08-18 15:59:19',
            ),
            25 => 
            array (
                'id' => 31,
                'name' => 'نوع سیم کارت',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 15:59:26',
                'updated_at' => '2025-08-18 15:59:26',
            ),
            26 => 
            array (
                'id' => 32,
                'name' => 'تراشه',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 15:59:40',
                'updated_at' => '2025-08-18 15:59:40',
            ),
            27 => 
            array (
                'id' => 33,
                'name' => 'پردازنده‌',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 15:59:48',
                'updated_at' => '2025-08-18 15:59:48',
            ),
            28 => 
            array (
                'id' => 34,
                'name' => 'حافظه داخلی',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:00:16',
                'updated_at' => '2025-08-18 16:00:16',
            ),
            29 => 
            array (
                'id' => 35,
                'name' => 'مقدار RAM',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:00:22',
                'updated_at' => '2025-08-18 16:00:22',
            ),
            30 => 
            array (
                'id' => 36,
                'name' => 'پشتیبانی از کارت حافظه',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:00:33',
                'updated_at' => '2025-08-18 16:00:33',
            ),
            31 => 
            array (
                'id' => 37,
                'name' => 'نسخه بلوتوث',
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:00:45',
                'updated_at' => '2025-08-18 16:00:45',
            ),
            32 => 
            array (
                'id' => 38,
                'name' => 'وزن',
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:19:29',
                'updated_at' => '2025-08-18 16:19:29',
            ),
            33 => 
            array (
                'id' => 39,
                'name' => 'ابعاد',
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:19:36',
                'updated_at' => '2025-08-18 16:19:36',
            ),
            34 => 
            array (
                'id' => 40,
                'name' => 'سازنده پردازنده',
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:19:41',
                'updated_at' => '2025-08-18 16:19:41',
            ),
            35 => 
            array (
                'id' => 41,
                'name' => 'نسل پردازنده',
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:19:47',
                'updated_at' => '2025-08-18 16:19:47',
            ),
            36 => 
            array (
                'id' => 42,
                'name' => 'مدل پردازنده',
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:19:53',
                'updated_at' => '2025-08-18 16:19:53',
            ),
            37 => 
            array (
                'id' => 43,
                'name' => 'فرکانس پردازنده',
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:19:58',
                'updated_at' => '2025-08-18 16:19:58',
            ),
            38 => 
            array (
                'id' => 44,
                'name' => 'حافظه Cache',
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:20:04',
                'updated_at' => '2025-08-18 16:20:04',
            ),
            39 => 
            array (
                'id' => 45,
                'name' => 'سازنده پردازنده گرافیکی',
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:20:11',
                'updated_at' => '2025-08-18 16:20:11',
            ),
            40 => 
            array (
                'id' => 46,
            'name' => 'ظرفیت حافظه رم (RAM)',
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:20:21',
                'updated_at' => '2025-08-18 16:20:21',
            ),
            41 => 
            array (
                'id' => 47,
                'name' => 'سایز صفحه نمایش',
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:20:29',
                'updated_at' => '2025-08-18 16:20:29',
            ),
            42 => 
            array (
                'id' => 48,
                'name' => 'شناسه کالا',
                'category_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:29:12',
                'updated_at' => '2025-08-18 16:29:12',
            ),
            43 => 
            array (
                'id' => 49,
                'name' => 'نوع یخچال فریزر',
                'category_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:29:29',
                'updated_at' => '2025-08-18 16:29:29',
            ),
            44 => 
            array (
                'id' => 50,
                'name' => 'گرید انرژی',
                'category_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:29:37',
                'updated_at' => '2025-08-18 16:29:37',
            ),
            45 => 
            array (
                'id' => 51,
                'name' => 'گنجایش کل به لیتر',
                'category_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:29:43',
                'updated_at' => '2025-08-18 16:29:43',
            ),
            46 => 
            array (
                'id' => 52,
                'name' => 'گنجایش کل به فوت',
                'category_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:29:49',
                'updated_at' => '2025-08-18 16:29:49',
            ),
            47 => 
            array (
                'id' => 53,
                'name' => 'نوع مقاومت در برابر برفک',
                'category_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:29:55',
                'updated_at' => '2025-08-18 16:29:55',
            ),
            48 => 
            array (
                'id' => 54,
                'name' => 'میزان صدا',
                'category_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:30:01',
                'updated_at' => '2025-08-18 16:30:01',
            ),
            49 => 
            array (
                'id' => 55,
                'name' => 'وزن',
                'category_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:30:09',
                'updated_at' => '2025-08-18 16:30:09',
            ),
        ));
        
        
    }
}