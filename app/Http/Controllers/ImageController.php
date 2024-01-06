<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\FirestoreService;

class ImageController extends Controller
{
    protected $firestoreService;

    public function __construct(FirestoreService $firestoreService)
    {
        $this->firestoreService = $firestoreService;
    }

    public function index()
    {
        // return "hi";
        $imageUrls = $this->firestoreService->getImageUrlsFromStorage("robotics-website-4a145.appspot.com");

        return response()->json([
            'data' => $imageUrls
        ]);
    }
}
