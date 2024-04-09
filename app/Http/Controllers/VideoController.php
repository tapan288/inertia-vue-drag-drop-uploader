<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function store(Request $request)
    {
        $video = $request->user()->videos()->create([
            'title' => $request->title,
        ]);

        return response()->json([
            'id' => $video->id,
        ]);
    }
}
