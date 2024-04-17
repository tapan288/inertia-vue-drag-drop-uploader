<?php

namespace App\Jobs;

use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use App\Events\VideoEncodingStarted;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class EncodeVideo implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public Video $video)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        VideoEncodingStarted::dispatch($this->video);

        FFMpeg::fromDisk('public')
            ->open($this->video->path)
            ->export()
            ->toDisk('public')
            ->inFormat(new \FFMpeg\Format\Video\X264())
            ->save('videos/' . Str::uuid() . '.mp4');
    }
}
