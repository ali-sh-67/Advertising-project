<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{



// DatabaseSeeder
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(categorySeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
