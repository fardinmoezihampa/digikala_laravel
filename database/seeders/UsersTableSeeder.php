<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'fardin moezi',
                'email' => 'fardin.m2000@gmail.com',
                'mobile' => NULL,
                'picture' => 'https://lh3.googleusercontent.com/a/ACg8ocLGkjViJwmJtszTSk5SfT1YBXElCyo6vc3kzNvuaA30MC7VEHjX=s96-c',
                'password' => NULL,
                'remember_token' => 'IQ3VNjMQNPXJXWLU385J4UkXL2ZMZ2NJwWkZjuEkO8MQNcE9YbJcsHYjQwIO',
                'deleted_at' => NULL,
                'created_at' => '2025-08-10 09:44:06',
                'updated_at' => '2025-08-10 09:44:06',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'fardin moezihampa',
                'email' => 'moezihampafardin@gmail.com',
                'mobile' => NULL,
                'picture' => 'https://lh3.googleusercontent.com/a/ACg8ocKaV_WYbt1XKTve8corKKK1Ik8e24NFgzZwjomAA3eKdegtyA=s96-c',
                'password' => NULL,
                'remember_token' => 'RK12CkgrqOeo4BRGa3NGTDn7yiMECmyxGAjiE1g08ThKoFMuCoE9ymSm9fM7',
                'deleted_at' => NULL,
                'created_at' => '2025-08-10 09:47:03',
                'updated_at' => '2025-08-10 09:47:03',
            ),
        ));
        
        
    }
}