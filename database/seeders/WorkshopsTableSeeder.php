<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Workshop;
use App\Models\Image;

class WorkshopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create();

        // foreach (range(1, 10) as $index) {
        //     \DB::table('workshops')->insert([
        //         'title' => $faker->name,
        //         'description' => $faker->text,
        //         'start_date' => $faker->date,
        //         'location' => $faker->address,
        //         'duration' => $faker->numberBetween(1, 10),
        //     ]);
        // }

        // $activeIds = [2, 4, 6];

        // foreach ($activeIds as $id) {
        //     \DB::table('active_workshops')->insert([
        //         'workshop_id' => $id,
        //     ]);
        // }

        $workshop1 = Workshop::find(2);
        // $workshop2 = Workshop::find(4);
        // $workshop3 = Workshop::find(6);

        // $image1 = Image::find(1);
        // $image2 = Image::find(2);
        // $image3 = Image::find(3);

        // $workshop1->images()->attach($image1);
        // $workshop2->images()->attach($image2);
        // $workshop3->images()->attach($image3);

        // $workshop1->images()->attach($image2);
        // $workshop1->images()->attach($image3);

        $workshop1->materials()->attach(2);
        $workshop1->materials()->attach(3);

    }
}
