<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table("main_posts")->insert([
            'post_id' => 1,
        ]);
        \DB::table("main_posts")->insert([
            'post_id' => 3,
        ]);
        \DB::table("main_posts")->insert([
            'post_id' => 5,
        ]);
        \DB::table("main_posts")->insert([
            'post_id' => 6,
        ]);
    }
}
