<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class WorkshopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            \DB::table('workshops')->insert([
                'title' => $faker->name,
                'description' => $faker->text,
                'start_date' => $faker->date,
                'location' => $faker->address,
                'duration' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
