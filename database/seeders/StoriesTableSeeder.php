<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stories')->delete();
        
        \DB::table('stories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'تست 1',
                'thumbnail' => 'XQejDoxenLeasK6Ct2n90t5eLNvtApNbZFOdtr2G.jpg',
                'story' => 'gnSRveX5z6vMB4H9KYVnSesPkRn71z2ilbArVOtD.mp4',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 07:57:19',
                'updated_at' => '2025-08-13 10:03:03',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'تست 2',
                'thumbnail' => '4jSokN0lJ8qgXqEWRob5PnLl7fdL6lMaHC6Uqi9u.jpg',
                'story' => 'eCFV2cvS8wHjlSWoDCZEUJHWAttpW5XwfaLMCmsD.mp4',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 07:57:54',
                'updated_at' => '2025-08-13 10:03:06',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'تست 3',
                'thumbnail' => 'JMXpUNA44UKI55nOTk3lo54UMd3rEI5eSMUW0QiK.jpg',
                'story' => 'zgRNUnLxBjUPNxvuzfNglDZoHA43JSXscJaG4cx9.mp4',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 08:01:22',
                'updated_at' => '2025-08-13 10:03:08',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'تست 4',
                'thumbnail' => '7uJbOcMpfNM3NxEk8CvurHDeZlnicaYJEV2FSdsG.jpg',
                'story' => 'BSIDyDqO7QvPX1yJazugxJPG0NWCuAbYvqtutfxr.mp4',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 08:04:34',
                'updated_at' => '2025-08-13 10:03:11',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'تست 5',
                'thumbnail' => 'wmkTSfJkBSzsIkofT6Uz5OLJUPuskQ5Z1JGCj1wQ.jpg',
                'story' => 'zs2nZzm3zcfrK4fM1Dfe2Ad39bPUyHEiYq96hWHd.mp4',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 08:05:04',
                'updated_at' => '2025-08-13 10:03:14',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'تست 6',
                'thumbnail' => 'siJ0HHZmfTR4w5CzNSCIUDKymo9Xcg4KVIiPMWCK.jpg',
                'story' => 'io2GiVr05NKi2lnLtTXbMTJTK5ISu3Y2bOR1veFV.mp4',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 08:05:42',
                'updated_at' => '2025-08-13 10:03:23',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'تست 7',
                'thumbnail' => 'rYgrh4osvXT2SusFg9SXsKhJtrItXhCytcn2fduu.jpg',
                'story' => 'IGwxTSKnhBicpmhaU8gCrHWib0Es189c2FZjrxzY.mp4',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 08:06:22',
                'updated_at' => '2025-08-13 10:03:26',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'تست 8',
                'thumbnail' => '4nZhWQlSrv2WlNrdXg6YYDlk7CbOjKVh9VomzHMM.jpg',
                'story' => 'NVpeWuHJpvpAUhsML3xftm6Yw5BzQ0GRSJ7VkXFf.mp4',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 08:06:39',
                'updated_at' => '2025-08-13 10:03:29',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'ورزشی',
                'thumbnail' => 'Yud18WMfnnYPt6VyITF16rGd7ld9ZlxWZs3RuBum.jpg',
                'story' => 'mGpXAFsbo1wiLTSKHUPa9fcyfEUkUKHbRVO57xhA.mp4',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 08:14:03',
                'updated_at' => '2025-08-13 10:03:32',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'آواز شجران',
                'thumbnail' => 'QCN947HhASmw8tWgkrKZkuGzW2nXTiv2w4tB1cbX.jpg',
                'story' => 'r0hSXdW3ncJxMk33SSQkF5bMFeH8R50tGG32Mgjj.mp4',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 08:11:02',
                'updated_at' => '2025-08-13 10:03:36',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'تست 9',
                'thumbnail' => 'wcoZhcNDe8pBoANY12S7Nk2JX2FMZvUJub6lZ3ID.jpg',
                'story' => 'uUOdeD79UCYsCA3WOnjNMlz9bl7K9h9HZ9JrnAPk.mp4',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 10:00:04',
                'updated_at' => '2025-08-13 10:02:38',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'تست 10',
                'thumbnail' => '8fc0mbCZZyNNuuHy9jKCwHzM38lMzoTRn6svOrD6.jpg',
                'story' => 'gHxIMon7EhRbbFSzKsmyM6rwyYfUIGCTEPKU5q1T.mp4',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 10:00:29',
                'updated_at' => '2025-08-13 10:02:42',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'تست 11',
                'thumbnail' => 'J9pbs93tyLtdebulTORLXuKVZwKI5Ik9ntzOWsQk.jpg',
                'story' => 'U1UAN73JZbSc4pmVHkgN9OmiJJyxBiQGHKnmkiUC.mp4',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 10:01:01',
                'updated_at' => '2025-08-13 10:02:42',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'تست 12',
                'thumbnail' => '3HyumGcqOKAap3tJ3ArQHzclGOmAEGja6yutcweL.jpg',
                'story' => 'oggrOdXlE5Pqco3BbPov4ZYYyBXqSS7XfrDWGK0q.mp4',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 10:01:55',
                'updated_at' => '2025-08-13 10:02:44',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'تست 13',
                'thumbnail' => '3i8R0et0iEVonLsJNN65ZjSHPM7tS9nh626JcgWP.webp',
                'story' => 'btCovjVCo2AEAmR2H6qWIJFLyGQOzjOuc44i3FdS.mp4',
                'admin_id' => NULL,
                'status' => 1,
                'created_at' => '2025-08-13 10:02:33',
                'updated_at' => '2025-08-13 10:02:47',
            ),
        ));
        
        
    }
}