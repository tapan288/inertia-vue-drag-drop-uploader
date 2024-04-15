<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\UpdateVideoRequest;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;
use Pion\Laravel\ChunkUpload\Handler\ContentRangeUploadHandler;

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

    public function upload(Request $request, Video $video)
    {
        $reciever = new FileReceiver(
            UploadedFile::fake()->createWithContent('file', $request->getContent()),
            $request,
            ContentRangeUploadHandler::class,
        );

        $save = $reciever->receive();

        if ($save->isFinished()) {
            return $this->saveAndStoreFile($save->getFile(), $video); // UploadedFile
        }

        $save->handler();
    }

    protected function saveAndStoreFile(UploadedFile $file, Video $video)
    {
        $video->update([
            'path' => $file->storeAs('videos', Str::uuid(), 'public'),
        ]);
    }

    public function destroy(Video $video)
    {
        $video->delete();

        return back();
    }
}
