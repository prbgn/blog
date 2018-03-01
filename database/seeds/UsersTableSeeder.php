<?php

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
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@prbgn.com',
                'password' => '$2y$10$mfhOUVmnnL7pRMvuGFJYuOBkgUR.n..yH0syVObNTWuQGR.QBJaJ2',
                'remember_token' => NULL,
                'created_at' => '2018-03-01 20:25:32',
                'updated_at' => '2018-03-01 20:25:32',
            ),
        ));
        
        
    }
}