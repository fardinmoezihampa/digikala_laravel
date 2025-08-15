<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Sliders')->delete();
        
        \DB::table('Sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'سلایدر 1',
                'image' => 'XVjt3L3R6xcEGkxCuV1LpOxyuooBfa3XvRZXoue3.webp',
                'link' => 'https://toplearn.com/',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 20:02:50',
                'updated_at' => '2025-08-13 20:04:31',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'سلایدر 2',
                'image' => 'bHAKpFS7UqC6RQXdOaP1hjoaf0gL2HBCGoTUzxbP.webp',
                'link' => 'https://toplearn.com/',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 20:03:03',
                'updated_at' => '2025-08-13 20:04:33',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'سلایدر 3',
                'image' => 'iRnvfIn41Es1oh29NTMTaiUivayNfijrjFp8Bhw8.webp',
                'link' => 'https://toplearn.com/',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 20:03:16',
                'updated_at' => '2025-08-13 20:04:36',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'سلایدر 4',
                'image' => 'l6eah2kmkmask1v9Afuq4WHmprJqewEVGku8hqap.webp',
                'link' => 'https://toplearn.com/',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 20:03:27',
                'updated_at' => '2025-08-13 20:04:39',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'سلایدر 5',
                'image' => 'k6qsepPKSa7wTUh36m38l99wceL9LhVIopzQUbDi.webp',
                'link' => 'https://toplearn.com/',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 20:03:41',
                'updated_at' => '2025-08-13 20:04:43',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'سلایدر 6',
                'image' => 'OTy26GMSSQG2450QSod0mNMjdDtpE2TIKiQKZXvV.gif',
                'link' => 'https://toplearn.com/',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 20:03:53',
                'updated_at' => '2025-08-13 20:04:52',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'سلایدر 7',
                'image' => 'QskKDRywqvPEGvnqbLoqGdhKOOlbGifpSWcPPQPm.png',
                'link' => 'https://toplearn.com/',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 20:04:06',
                'updated_at' => '2025-08-13 20:04:55',
            ),
        ));
        
        
    }
}