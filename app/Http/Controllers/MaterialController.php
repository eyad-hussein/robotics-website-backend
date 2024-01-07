<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;

class MaterialController extends Controller
{
    public function materialsByWorkshp(Request $request)
    {
        $workshop = Workshop::find($request->id);

        return response(
            [
                'workshop' => $workshop,
                'materials' => $workshop->materials,
            ],
            200
        );
    }
}
