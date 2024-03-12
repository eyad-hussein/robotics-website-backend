<?php

namespace Database\Seeders;

use App\Models\Workshop\MainWorkshop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainWorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MainWorkshop::factory(3)->create();
    }
}
