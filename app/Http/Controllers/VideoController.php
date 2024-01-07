<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FirestoreService;

class VideoController extends Controller
{
    protected $firestoreService;

    public function __construct(FirestoreService $firestoreService)
    {
        $this->firestoreService = $firestoreService;
    }

    public function index()
    {
        $videoUrls = $this->firestoreService->getVideoUrlsFromStorge("robotics-website-4a145.appspot.com");

        return response()->json([
            'data' => $videoUrls
        ]);
    }
}
