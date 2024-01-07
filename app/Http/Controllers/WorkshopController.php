<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Video;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $workshop = Workshop::create([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'location' => $request->location,
            'duration' => $request->duration,
        ]);

        return response()->json(['workshop' => $workshop], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Workshop $workshop)
    {
        $workshop = Workshop::find($request->id);
        $materials = $workshop->materials;

        $materialsImages = [];
        foreach ($materials as $material) {
            $materialsImages[] = Image::find($material->image_id);
        }

        $sessions = $workshop->sessions;
        $sessionsImages = [];
        foreach ($sessions as $session) {
            $sessionsImages[] = Image::find($session->image_id);
        }

        return response(
            [
                'workshop' => $workshop,
                'images' => $workshop->images,
                'materials' => $materials,
                'materialsImages' => $materialsImages,
                'sessions' => $sessions,
                'sessionsImages' => $sessionsImages,
            ],
            200
        );
    }

    public function showActive()
    {
        $activeWorkshops = Workshop::whereHas('activeWorkshops')->with('images')->get();

        return response(
            [
                'activeWorkshops' => $activeWorkshops,
            ],
            200
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workshop $workshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Workshop $workshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Workshop $workshop)
    {
        //
    }
}
