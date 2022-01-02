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
                [
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

            ],[
                    'id'=>5,
                    'name' => 'ali',
                    'email' => 'ali@gmail.com',
                    'password' => Hash::make('password'),
                    'status' =>'User',

                ],[
                    'id'=>6,
                    'name' => 'akbar',
                    'email' => 'akbar@gmail.com',
                    'password' => Hash::make('password'),
                    'status' =>'User',

                ],[
                    'id'=>7,
                    'name' => 'arash',
                    'email' => 'arash@gmail.com',
                    'password' => Hash::make('password'),
                    'status' =>'User',

                ],[
                    'id'=>8,
                    'name' => 'sajad',
                    'email' => 'sajad@gmail.com',
                    'password' => Hash::make('password'),
                    'status' =>'User',

                ],[
                    'id'=>9,
                    'name' => 'majid',
                    'email' => 'malid@gmail.com',
                    'password' => Hash::make('password'),
                    'status' =>'User',

                ],[
                    'id'=>10,
                    'name' => 'susan',
                    'email' => 'susan@gmail.com',
                    'password' => Hash::make('password'),
                    'status' =>'User',

                ],[
                    'id'=>11,
                    'name' => 'aria',
                    'email' => 'aria@gmail.com',
                    'password' => Hash::make('password'),
                    'status' =>'User',

                ],[
                    'id'=>12,
                    'name' => 'arad',
                    'email' => 'arad@gmail.com',
                    'password' => Hash::make('password'),
                    'status' =>'User',

                ],[
                    'id'=>13,
                    'name' => 'roya',
                    'email' => 'roya@gmail.com',
                    'password' => Hash::make('password'),
                    'status' =>'User',

                ]
            ]);
        }

}
