<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
        public function run()
        {
            DB::table('users')->insert([
                'id'=>1,
                'name' => 'javad',
                'email' => 'javad@gmail.com',
                'password' => Hash::make('password'),
                'status' =>'Admin',
            ],[
                'id'=>2,
                'name' => 'hame',
                'email' => 'hamed@gmail.com',
                'password' => Hash::make('password'),
                'status' =>'User',

            ],[
                'id'=>3,
                'name' => 'ahmad',
                'email' => 'ahmed@gmail.com',
                'password' => Hash::make('password'),
                'status' =>'User',
            ],[
                'id'=>4,
                'name' => 'sara',
                'email' => 'sara@gmail.com',
                'password' => Hash::make('password'),
                'status' =>'User',
           
            ]);
        }
   
}
