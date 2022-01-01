<?php

namespace Database\Seeders;
//use App\Models\category;
use App\Models\ad;
//use App\Models\User;
//use App\Models\comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ad::factory()
            ->count(5)
            ->forUser()
//            ->forComment()
            ->create();

    }

    private function category()
    {
    }
}
