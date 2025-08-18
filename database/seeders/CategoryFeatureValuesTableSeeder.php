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
                'id' => 11,
                'value' => 'سامسونگ',
                'category_feature_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:09:27',
                'updated_at' => '2025-08-18 10:09:27',
            ),
            1 => 
            array (
                'id' => 12,
                'value' => 'اپل',
                'category_feature_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:09:33',
                'updated_at' => '2025-08-18 10:09:33',
            ),
            2 => 
            array (
                'id' => 13,
                'value' => 'شیائومی',
                'category_feature_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:09:50',
                'updated_at' => '2025-08-18 10:09:50',
            ),
            3 => 
            array (
                'id' => 14,
                'value' => '64GB',
                'category_feature_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:10:09',
                'updated_at' => '2025-08-18 10:10:09',
            ),
            4 => 
            array (
                'id' => 15,
                'value' => '128GB',
                'category_feature_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:10:15',
                'updated_at' => '2025-08-18 10:10:15',
            ),
            5 => 
            array (
                'id' => 16,
                'value' => '256GB',
                'category_feature_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:10:21',
                'updated_at' => '2025-08-18 10:10:21',
            ),
            6 => 
            array (
                'id' => 17,
                'value' => 'اندروید',
                'category_feature_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:10:35',
                'updated_at' => '2025-08-18 10:10:35',
            ),
            7 => 
            array (
                'id' => 18,
                'value' => 'IOS',
                'category_feature_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:10:42',
                'updated_at' => '2025-08-18 10:10:42',
            ),
            8 => 
            array (
                'id' => 19,
                'value' => 'ایسوس',
                'category_feature_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:12:01',
                'updated_at' => '2025-08-18 10:12:01',
            ),
            9 => 
            array (
                'id' => 20,
                'value' => 'MSI',
                'category_feature_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:12:09',
                'updated_at' => '2025-08-18 10:12:09',
            ),
            10 => 
            array (
                'id' => 21,
                'value' => '32GB',
                'category_feature_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:12:30',
                'updated_at' => '2025-08-18 10:12:30',
            ),
            11 => 
            array (
                'id' => 22,
                'value' => '16GB',
                'category_feature_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:12:46',
                'updated_at' => '2025-08-18 10:12:46',
            ),
            12 => 
            array (
                'id' => 23,
                'value' => '512GB SSD',
                'category_feature_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:13:09',
                'updated_at' => '2025-08-18 10:13:09',
            ),
            13 => 
            array (
                'id' => 24,
                'value' => '1TB SSD',
                'category_feature_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:13:39',
                'updated_at' => '2025-08-18 10:13:39',
            ),
            14 => 
            array (
                'id' => 25,
                'value' => 'پی اچ',
                'category_feature_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:14:49',
                'updated_at' => '2025-08-18 10:14:49',
            ),
            15 => 
            array (
                'id' => 26,
                'value' => '8GB',
                'category_feature_id' => 13,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:15:17',
                'updated_at' => '2025-08-18 10:15:17',
            ),
            16 => 
            array (
                'id' => 27,
                'value' => '16GB',
                'category_feature_id' => 13,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:15:24',
                'updated_at' => '2025-08-18 10:15:24',
            ),
            17 => 
            array (
                'id' => 28,
                'value' => '256GB SSD',
                'category_feature_id' => 14,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:16:48',
                'updated_at' => '2025-08-18 10:16:48',
            ),
            18 => 
            array (
                'id' => 29,
                'value' => '512GB SSD',
                'category_feature_id' => 14,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:16:55',
                'updated_at' => '2025-08-18 10:16:55',
            ),
            19 => 
            array (
                'id' => 30,
                'value' => 'بوش',
                'category_feature_id' => 15,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:17:55',
                'updated_at' => '2025-08-18 10:17:55',
            ),
            20 => 
            array (
                'id' => 31,
                'value' => '32 فوت',
                'category_feature_id' => 16,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:18:37',
                'updated_at' => '2025-08-18 10:18:37',
            ),
            21 => 
            array (
                'id' => 32,
                'value' => 'اسنوا',
                'category_feature_id' => 17,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:19:38',
                'updated_at' => '2025-08-18 10:19:38',
            ),
            22 => 
            array (
                'id' => 33,
                'value' => '8Kg',
                'category_feature_id' => 18,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:20:13',
                'updated_at' => '2025-08-18 10:20:13',
            ),
            23 => 
            array (
                'id' => 34,
                'value' => 'بی سیم',
                'category_feature_id' => 19,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:20:56',
                'updated_at' => '2025-08-18 10:20:56',
            ),
            24 => 
            array (
                'id' => 35,
                'value' => 'با سیم',
                'category_feature_id' => 19,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:21:00',
                'updated_at' => '2025-08-18 10:21:00',
            ),
            25 => 
            array (
                'id' => 36,
                'value' => 'لیتیوم',
                'category_feature_id' => 20,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:21:39',
                'updated_at' => '2025-08-18 10:21:39',
            ),
            26 => 
            array (
                'id' => 37,
                'value' => 'برند معتبر',
                'category_feature_id' => 21,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:22:25',
                'updated_at' => '2025-08-18 10:22:25',
            ),
            27 => 
            array (
                'id' => 38,
                'value' => 'LG',
                'category_feature_id' => 21,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:22:41',
                'updated_at' => '2025-08-18 10:22:41',
            ),
            28 => 
            array (
                'id' => 39,
                'value' => 'SONY',
                'category_feature_id' => 21,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:22:48',
                'updated_at' => '2025-08-18 10:22:48',
            ),
            29 => 
            array (
                'id' => 40,
                'value' => 'SAMSUNG',
                'category_feature_id' => 21,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:22:55',
                'updated_at' => '2025-08-18 10:22:55',
            ),
            30 => 
            array (
                'id' => 41,
                'value' => '43 اینچ',
                'category_feature_id' => 22,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:23:09',
                'updated_at' => '2025-08-18 10:23:09',
            ),
            31 => 
            array (
                'id' => 42,
                'value' => '55 اینچ',
                'category_feature_id' => 22,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:23:17',
                'updated_at' => '2025-08-18 10:23:17',
            ),
            32 => 
            array (
                'id' => 43,
                'value' => '63 اینچ',
                'category_feature_id' => 22,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:23:25',
                'updated_at' => '2025-08-18 10:23:25',
            ),
            33 => 
            array (
                'id' => 44,
                'value' => 'LED',
                'category_feature_id' => 23,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:23:38',
                'updated_at' => '2025-08-18 10:23:38',
            ),
            34 => 
            array (
                'id' => 45,
                'value' => 'LCD',
                'category_feature_id' => 23,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:23:45',
                'updated_at' => '2025-08-18 10:23:45',
            ),
            35 => 
            array (
                'id' => 46,
                'value' => 'OLED',
                'category_feature_id' => 23,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 10:23:52',
                'updated_at' => '2025-08-18 10:23:52',
            ),
            36 => 
            array (
                'id' => 47,
                'value' => 'سیستم عامل iOS',
                'category_feature_id' => 24,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:01:08',
                'updated_at' => '2025-08-18 16:01:08',
            ),
            37 => 
            array (
                'id' => 48,
                'value' => 'سیستم عامل android',
                'category_feature_id' => 24,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:01:20',
                'updated_at' => '2025-08-18 16:01:20',
            ),
            38 => 
            array (
                'id' => 49,
                'value' => 'پرچم دار',
                'category_feature_id' => 25,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:01:41',
                'updated_at' => '2025-08-18 16:04:00',
            ),
            39 => 
            array (
                'id' => 50,
                'value' => 'iPhone ۱۶ CH',
                'category_feature_id' => 26,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:01:54',
                'updated_at' => '2025-08-18 16:01:54',
            ),
            40 => 
            array (
                'id' => 51,
                'value' => 'iPhone 14 CH',
                'category_feature_id' => 26,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:02:02',
                'updated_at' => '2025-08-18 16:02:02',
            ),
            41 => 
            array (
                'id' => 52,
                'value' => 'Samsung_10A ',
                'category_feature_id' => 26,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:02:37',
                'updated_at' => '2025-08-18 16:02:37',
            ),
            42 => 
            array (
                'id' => 53,
                'value' => 'Redmi Note ۱۴ Pro ۵G',
                'category_feature_id' => 26,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:03:22',
                'updated_at' => '2025-08-18 16:03:22',
            ),
            43 => 
            array (
                'id' => 54,
                'value' => 'میان‌رده',
                'category_feature_id' => 25,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:03:41',
                'updated_at' => '2025-08-18 16:03:41',
            ),
            44 => 
            array (
                'id' => 55,
                'value' => '۹ سپتامبر ۲۰۲۴',
                'category_feature_id' => 27,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:04:14',
                'updated_at' => '2025-08-18 16:04:14',
            ),
            45 => 
            array (
                'id' => 56,
                'value' => '۱۶۲.۳x۷۴.۴x۸.۴ میلی‌متر',
                'category_feature_id' => 27,
                'deleted_at' => '2025-08-18 16:05:14',
                'created_at' => '2025-08-18 16:04:22',
                'updated_at' => '2025-08-18 16:05:14',
            ),
            46 => 
            array (
                'id' => 57,
                'value' => '۱۶۲.۳x۷۴.۴x۸.۴ میلی‌متر',
                'category_feature_id' => 28,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:04:38',
                'updated_at' => '2025-08-18 16:04:38',
            ),
            47 => 
            array (
                'id' => 58,
                'value' => '۱۴۷.۶x۷۱.۶x۷.۸ میلی‌متر',
                'category_feature_id' => 28,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:04:46',
                'updated_at' => '2025-08-18 16:04:46',
            ),
            48 => 
            array (
                'id' => 59,
                'value' => '۱60.۶x۷۱.۶x8.۸ میلی‌متر',
                'category_feature_id' => 28,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:04:57',
                'updated_at' => '2025-08-18 16:04:57',
            ),
            49 => 
            array (
                'id' => 60,
                'value' => '۱۰ ژانویه ۲۰۲۵',
                'category_feature_id' => 27,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:05:10',
                'updated_at' => '2025-08-18 16:05:10',
            ),
            50 => 
            array (
                'id' => 61,
                'value' => '۱۷۰ گرم',
                'category_feature_id' => 29,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:05:29',
                'updated_at' => '2025-08-18 16:05:29',
            ),
            51 => 
            array (
                'id' => 62,
                'value' => '۱۹۰ گرم',
                'category_feature_id' => 29,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:05:35',
                'updated_at' => '2025-08-18 16:05:35',
            ),
            52 => 
            array (
                'id' => 63,
                'value' => 'دو عدد',
                'category_feature_id' => 30,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:05:50',
                'updated_at' => '2025-08-18 16:05:50',
            ),
            53 => 
            array (
                'id' => 64,
                'value' => 'سه عدد',
                'category_feature_id' => 30,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:05:56',
                'updated_at' => '2025-08-18 16:05:56',
            ),
            54 => 
            array (
                'id' => 65,
                'value' => 'یک عدد',
                'category_feature_id' => 30,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:06:04',
                'updated_at' => '2025-08-18 16:06:04',
            ),
            55 => 
            array (
                'id' => 66,
            'value' => 'سایز نانو (۸.۸ × ۱۲.۳ میلی‌متر)',
                'category_feature_id' => 31,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:06:18',
                'updated_at' => '2025-08-18 16:06:18',
            ),
            56 => 
            array (
                'id' => 67,
            'value' => 'سایز نانو (6.۸ × ۱۲.5 میلی‌متر)',
                'category_feature_id' => 31,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:06:28',
                'updated_at' => '2025-08-18 16:07:00',
            ),
            57 => 
            array (
                'id' => 68,
            'value' => 'Apple A۱۸ (۳ nm)',
                'category_feature_id' => 32,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:07:21',
                'updated_at' => '2025-08-18 16:07:21',
            ),
            58 => 
            array (
                'id' => 69,
                'value' => 'Mediatek Dimensity ۷۳۰۰ Ultra',
                'category_feature_id' => 32,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:07:31',
                'updated_at' => '2025-08-18 16:07:31',
            ),
            59 => 
            array (
                'id' => 70,
                'value' => 'small Dimensity 8۳۰۰ Ultra',
                'category_feature_id' => 32,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:07:46',
                'updated_at' => '2025-08-18 16:07:46',
            ),
            60 => 
            array (
                'id' => 71,
            'value' => 'هشت هسته‌ای (چهار هسته ۲.۵ گیگاهرتزی )',
                'category_feature_id' => 33,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:08:29',
                'updated_at' => '2025-08-18 16:08:29',
            ),
            61 => 
            array (
                'id' => 72,
            'value' => 'شش هسته‌ای (دو هسته ۴.۰۴ گیگاهرتزی)',
                'category_feature_id' => 33,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:08:51',
                'updated_at' => '2025-08-18 16:08:51',
            ),
            62 => 
            array (
                'id' => 73,
                'value' => '۵۱۲ گیگابایت',
                'category_feature_id' => 34,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:09:07',
                'updated_at' => '2025-08-18 16:09:07',
            ),
            63 => 
            array (
                'id' => 74,
                'value' => '۱۲۸ گیگابایت',
                'category_feature_id' => 34,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:09:19',
                'updated_at' => '2025-08-18 16:09:19',
            ),
            64 => 
            array (
                'id' => 75,
                'value' => '1 ترا بایت',
                'category_feature_id' => 34,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:09:39',
                'updated_at' => '2025-08-18 16:09:39',
            ),
            65 => 
            array (
                'id' => 76,
                'value' => '۸ گیگابایت',
                'category_feature_id' => 35,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:09:54',
                'updated_at' => '2025-08-18 16:09:54',
            ),
            66 => 
            array (
                'id' => 77,
                'value' => '۱۲ گیگابایت',
                'category_feature_id' => 35,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:10:06',
                'updated_at' => '2025-08-18 16:10:06',
            ),
            67 => 
            array (
                'id' => 78,
                'value' => '10 گیگابایت',
                'category_feature_id' => 35,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:10:12',
                'updated_at' => '2025-08-18 16:10:12',
            ),
            68 => 
            array (
                'id' => 79,
                'value' => 'فاقد پشتیبانی از کارت حافظه',
                'category_feature_id' => 36,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:10:40',
                'updated_at' => '2025-08-18 16:10:40',
            ),
            69 => 
            array (
                'id' => 80,
                'value' => '۵.۳',
                'category_feature_id' => 37,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:11:03',
                'updated_at' => '2025-08-18 16:11:03',
            ),
            70 => 
            array (
                'id' => 81,
                'value' => '۵.۴',
                'category_feature_id' => 37,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:11:11',
                'updated_at' => '2025-08-18 16:11:11',
            ),
            71 => 
            array (
                'id' => 82,
                'value' => '۵.5',
                'category_feature_id' => 37,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:11:17',
                'updated_at' => '2025-08-18 16:11:17',
            ),
            72 => 
            array (
                'id' => 83,
                'value' => '۲.۱ کیلوگرم',
                'category_feature_id' => 38,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:20:41',
                'updated_at' => '2025-08-18 16:20:41',
            ),
            73 => 
            array (
                'id' => 84,
                'value' => '۲.۳ کیلوگرم',
                'category_feature_id' => 38,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:20:58',
                'updated_at' => '2025-08-18 16:20:58',
            ),
            74 => 
            array (
                'id' => 85,
                'value' => '۲.5 کیلوگرم',
                'category_feature_id' => 38,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:21:04',
                'updated_at' => '2025-08-18 16:21:04',
            ),
            75 => 
            array (
                'id' => 86,
                'value' => '۳۶۲.۳x۲۳۹.۹x۲۳.۵ میلی‌متر',
                'category_feature_id' => 39,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:21:14',
                'updated_at' => '2025-08-18 16:21:14',
            ),
            76 => 
            array (
                'id' => 87,
                'value' => '۳۵۷x۲۵۵x۲۳ میلی‌متر',
                'category_feature_id' => 39,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:21:21',
                'updated_at' => '2025-08-18 16:21:21',
            ),
            77 => 
            array (
                'id' => 88,
                'value' => 'Intel',
                'category_feature_id' => 40,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:21:36',
                'updated_at' => '2025-08-18 16:21:36',
            ),
            78 => 
            array (
                'id' => 89,
                'value' => 'AMD',
                'category_feature_id' => 40,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:21:42',
                'updated_at' => '2025-08-18 16:21:42',
            ),
            79 => 
            array (
                'id' => 90,
                'value' => 'Asus',
                'category_feature_id' => 40,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:21:51',
                'updated_at' => '2025-08-18 16:21:51',
            ),
            80 => 
            array (
                'id' => 91,
                'value' => 'نسل ۱۳ اینتل',
                'category_feature_id' => 41,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:22:01',
                'updated_at' => '2025-08-18 16:22:01',
            ),
            81 => 
            array (
                'id' => 92,
                'value' => 'نسل ۸ ای ام دی',
                'category_feature_id' => 41,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:22:09',
                'updated_at' => '2025-08-18 16:22:09',
            ),
            82 => 
            array (
                'id' => 93,
                'value' => 'نسل 10 ای ام دی',
                'category_feature_id' => 41,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:22:15',
                'updated_at' => '2025-08-18 16:22:15',
            ),
            83 => 
            array (
                'id' => 94,
                'value' => 'نسل ۱0 اینتل',
                'category_feature_id' => 41,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:22:26',
                'updated_at' => '2025-08-18 16:22:26',
            ),
            84 => 
            array (
                'id' => 95,
                'value' => '۱۳۹۰۰H',
                'category_feature_id' => 42,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:22:36',
                'updated_at' => '2025-08-18 16:22:36',
            ),
            85 => 
            array (
                'id' => 96,
                'value' => '۸۶۴۵HS',
                'category_feature_id' => 42,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:22:42',
                'updated_at' => '2025-08-18 16:22:42',
            ),
            86 => 
            array (
                'id' => 97,
                'value' => '۸۴۵HS',
                'category_feature_id' => 42,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:22:49',
                'updated_at' => '2025-08-18 16:22:49',
            ),
            87 => 
            array (
                'id' => 98,
                'value' => '۲.۶ تا ۵.۴ گیگاهرتز',
                'category_feature_id' => 43,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:23:00',
                'updated_at' => '2025-08-18 16:23:00',
            ),
            88 => 
            array (
                'id' => 99,
                'value' => '۴.۳ تا ۵ گیگاهرتز',
                'category_feature_id' => 43,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:23:10',
                'updated_at' => '2025-08-18 16:23:10',
            ),
            89 => 
            array (
                'id' => 100,
                'value' => '۲۴ مگابایت',
                'category_feature_id' => 44,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:23:23',
                'updated_at' => '2025-08-18 16:23:23',
            ),
            90 => 
            array (
                'id' => 101,
                'value' => '22مگابایت',
                'category_feature_id' => 44,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:23:28',
                'updated_at' => '2025-08-18 16:23:50',
            ),
            91 => 
            array (
                'id' => 102,
                'value' => '۱۶ مگابایت',
                'category_feature_id' => 44,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:23:40',
                'updated_at' => '2025-08-18 16:23:40',
            ),
            92 => 
            array (
                'id' => 103,
                'value' => 'NVIDIA',
                'category_feature_id' => 45,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:25:49',
                'updated_at' => '2025-08-18 16:25:49',
            ),
            93 => 
            array (
                'id' => 104,
                'value' => '۴۰ گیگابایت',
                'category_feature_id' => 46,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:26:09',
                'updated_at' => '2025-08-18 16:26:09',
            ),
            94 => 
            array (
                'id' => 105,
                'value' => '۱۶ گیگابایت',
                'category_feature_id' => 46,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:26:20',
                'updated_at' => '2025-08-18 16:26:20',
            ),
            95 => 
            array (
                'id' => 106,
                'value' => '۱۵.۶ اینچ',
                'category_feature_id' => 47,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:26:33',
                'updated_at' => '2025-08-18 16:26:33',
            ),
            96 => 
            array (
                'id' => 107,
                'value' => '۲۹۰۵۷۸۱۷۰۰۳۴۸',
                'category_feature_id' => 48,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:30:20',
                'updated_at' => '2025-08-18 16:30:20',
            ),
            97 => 
            array (
                'id' => 108,
                'value' => '۷۸۱۷۰۰۳۴۸',
                'category_feature_id' => 48,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:30:27',
                'updated_at' => '2025-08-18 16:30:27',
            ),
            98 => 
            array (
                'id' => 109,
                'value' => 'ساید بای ساید',
                'category_feature_id' => 49,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:30:36',
                'updated_at' => '2025-08-18 16:30:36',
            ),
            99 => 
            array (
                'id' => 110,
                'value' => 'تک',
                'category_feature_id' => 49,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:30:44',
                'updated_at' => '2025-08-18 16:30:44',
            ),
            100 => 
            array (
                'id' => 111,
                'value' => 'فریزر',
                'category_feature_id' => 49,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:30:53',
                'updated_at' => '2025-08-18 16:30:53',
            ),
            101 => 
            array (
                'id' => 112,
                'value' => 'فقط یخچال ',
                'category_feature_id' => 49,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:31:03',
                'updated_at' => '2025-08-18 16:31:03',
            ),
            102 => 
            array (
                'id' => 113,
                'value' => 'A',
                'category_feature_id' => 50,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:31:23',
                'updated_at' => '2025-08-18 16:31:23',
            ),
            103 => 
            array (
                'id' => 114,
                'value' => 'B',
                'category_feature_id' => 50,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:31:27',
                'updated_at' => '2025-08-18 16:31:27',
            ),
            104 => 
            array (
                'id' => 115,
                'value' => '++A',
                'category_feature_id' => 50,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:31:36',
                'updated_at' => '2025-08-18 16:31:36',
            ),
            105 => 
            array (
                'id' => 116,
                'value' => '245',
                'category_feature_id' => 51,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:31:52',
                'updated_at' => '2025-08-18 16:32:35',
            ),
            106 => 
            array (
                'id' => 117,
                'value' => '348',
                'category_feature_id' => 51,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:31:56',
                'updated_at' => '2025-08-18 16:32:41',
            ),
            107 => 
            array (
                'id' => 118,
                'value' => '522',
                'category_feature_id' => 51,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:32:03',
                'updated_at' => '2025-08-18 16:32:46',
            ),
            108 => 
            array (
                'id' => 119,
                'value' => '28',
                'category_feature_id' => 52,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:32:18',
                'updated_at' => '2025-08-18 16:32:18',
            ),
            109 => 
            array (
                'id' => 120,
                'value' => '22',
                'category_feature_id' => 52,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:32:21',
                'updated_at' => '2025-08-18 16:32:21',
            ),
            110 => 
            array (
                'id' => 121,
                'value' => '21',
                'category_feature_id' => 52,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:32:24',
                'updated_at' => '2025-08-18 16:32:24',
            ),
            111 => 
            array (
                'id' => 122,
                'value' => 'نوفراست',
                'category_feature_id' => 53,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:32:57',
                'updated_at' => '2025-08-18 16:32:57',
            ),
            112 => 
            array (
                'id' => 123,
                'value' => '۴۲ دسی بل',
                'category_feature_id' => 54,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:33:07',
                'updated_at' => '2025-08-18 16:33:07',
            ),
            113 => 
            array (
                'id' => 124,
                'value' => '۴1 دسی بل',
                'category_feature_id' => 54,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:33:12',
                'updated_at' => '2025-08-18 16:33:12',
            ),
            114 => 
            array (
                'id' => 125,
                'value' => '33 دسی بل',
                'category_feature_id' => 54,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:33:23',
                'updated_at' => '2025-08-18 16:33:23',
            ),
            115 => 
            array (
                'id' => 126,
                'value' => '۸۵ کیلوگرم',
                'category_feature_id' => 55,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:33:33',
                'updated_at' => '2025-08-18 16:33:33',
            ),
            116 => 
            array (
                'id' => 127,
                'value' => '۸8 کیلوگرم',
                'category_feature_id' => 55,
                'deleted_at' => NULL,
                'created_at' => '2025-08-18 16:33:39',
                'updated_at' => '2025-08-18 16:33:39',
            ),
        ));
        
        
    }
}