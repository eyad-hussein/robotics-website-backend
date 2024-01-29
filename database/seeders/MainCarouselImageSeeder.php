<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainCarouselImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainCarouselImagesIds = [8, 9, 10];

        foreach ($mainCarouselImagesIds as $id) {
            \DB::table("main_carousel_images")->insert(['image_id' => $id,]);
        }
    }
}
