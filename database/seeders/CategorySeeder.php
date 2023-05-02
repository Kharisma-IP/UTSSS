<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        {
            //
            DB::table('categories')->insert([
                "name" => "Anime"
            ]);
            DB::table('categories')->insert([
                "name" => "Romance"
            ]);
            DB::table('categories')->insert([
                "name" => "Horor"
            ]);
            DB::table('categories')->insert([
                "name" => "Historical"
            ]);


        }
    }
}
