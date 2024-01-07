<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Controllers\VideoController;
use App\Services\FirestoreService;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    protected $firestoreService;

    public function __construct(FirestoreService $firestoreService)
    {
        $this->firestoreService = $firestoreService;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $videoUrls = $this->firestoreService->getVideoUrlsFromStorge("robotics-website-4a145.appspot.com");

        foreach ($videoUrls as $videoUrl) {
            Video::create(['url' => $videoUrl, 'alt' => 'video']);
        }
    }
}
