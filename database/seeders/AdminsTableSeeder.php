<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'email' => 'superadmin@example.com',
                'mobile' => '0912000001',
                'password' => '$2y$12$1DadqgmtkoxDDbRdtKRV/u78R64G3WMFNmfc9j0BqvqIK8X7oJvxy',
                'deleted_at' => NULL,
                'created_at' => '2025-09-01 08:34:44',
                'updated_at' => '2025-09-01 08:34:44',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Product Admin',
                'email' => 'productdmin@example.com',
                'mobile' => '0912000002',
                'password' => '$2y$12$8xlCPGdzOt7VAjNmUqFO/euqJ75esTsofF5lurnJyoa7KYa42wR.i',
                'deleted_at' => NULL,
                'created_at' => '2025-09-01 08:34:44',
                'updated_at' => '2025-09-01 08:34:44',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'OrderAdmin',
                'email' => 'orderadmin@example.com',
                'mobile' => '0912000003',
                'password' => '$2y$12$cqbX7PLyATvojzh5O2f9uubIZp5RcVDUxuaYiHZHF4Oy/ktRhnh1.',
                'deleted_at' => NULL,
                'created_at' => '2025-09-01 08:34:44',
                'updated_at' => '2025-09-01 08:34:44',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'فردین معزی',
                'email' => 'test@gmail.com',
                'mobile' => '091245786',
                'password' => '$2y$12$bxpvVXllrVHiQEdmK/a/GO3dag2Mjpx8OEq9yOZhwMblPpI47zwSa',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2025-09-01 08:49:00',
            ),
        ));
        
        
    }
}