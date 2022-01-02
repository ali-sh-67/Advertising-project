<?php

namespace Database\Seeders;
//use App\Models\category;
use App\Models\ad;
//use App\Models\User;
//use App\Models\comment;
use App\Models\comment;
use App\Models\User;
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
//        $User=User::factory()->create();
//$comment=comment::factory()->create();
       $ad= ad::factory()
            ->count(50)
//            ->for($User)
//            ->has($comment)
            ->create();

    }

    private function category()
    {
    }
}
