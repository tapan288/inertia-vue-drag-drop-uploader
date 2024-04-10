<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateVideoRequest;

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

    public function update(UpdateVideoRequest $request, Video $video)
    {
        $video->update($request->validated());

        return back();
    }
}
