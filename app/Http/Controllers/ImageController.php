<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\FirestoreService;
use App\Models\MainCarouselImage;

class ImageController extends Controller
{
    protected $firestoreService;

    public function __construct(FirestoreService $firestoreService)
    {
        $this->firestoreService = $firestoreService;
    }

    public function index()
    {
        $imageUrls = $this->firestoreService->getImageUrlsFromStorage("robotics-website-4a145.appspot.com");

        return response()->json([
            'data' => $imageUrls
        ]);
    }

    public function showMainCarouselImages()
    {
        $mainCarouselImages = MainCarouselImage::with('image')->get();


        return response(
            [
                'mainCarouselImages' => $mainCarouselImages,
            ],
            200
        );
    }
}
