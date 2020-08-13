<?php

namespace App\Jobs\Videos;

use App\Video;
use FFMpeg;
use FFMpeg\Format\Video\X264;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ConvertForStreaming implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $video;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Video $video)
    {
        $this->video = $video;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $low = (new X264('aac'))->setKiloBitrate(250);
        $mid = (new X264('aac'))->setKiloBitrate(500);
        $high = (new X264('aac'))->setKiloBitrate(1000);

        FFmpeg::fromDisk('local')
            ->open($this->video->path)
            ->exportForHLS()
            ->onProgress(function($percentage) {
                $this->video->update([
                    'percentage' => $percentage
                ]);
            })
            ->addFormat($high)
            ->addFormat($mid, function($media){ 
                $media->scale(960, 720);
            })
            ->addFormat($low, function($media) {
                $media->scale(640, 480);
            })
            ->save("public/videos/{$this->video->id}/{$this->video->id}.m3u8");
    }
}
