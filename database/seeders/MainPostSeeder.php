<?php

namespace Database\Seeders;

use App\Models\MainPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(
            [
                PostSeeder::class,
            ]
        );

        MainPost::create(['post_id' => 1, 'order' => 1]);
        MainPost::create(['post_id' => 2, 'order' => 4]);
        MainPost::create(['post_id' => 3, 'order' => 3]);
        MainPost::create(['post_id' => 4, 'order' => 2]);
    }
}
