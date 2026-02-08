<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                $param = [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => 'password123',
                'created_at' => now(),
                'updated_at' => now(),
                ];
               \DB::table('users')->insert($param);
               
                $param = [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'password' => 'password456',
                'created_at' => now(),
                'updated_at' => now(),
                ];
               \DB::table('users')->insert($param);

                $param = [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => 'adminpass',
                'created_at' => now(),
                'updated_at' => now(),
                ];
               \DB::table('users')->insert($param);
    }
}
