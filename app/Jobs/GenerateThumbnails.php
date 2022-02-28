<?php

namespace App\Jobs;

use App\Models\Photo;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\Middleware\WithoutOverlapping;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class GenerateThumbnails implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $photo;
    protected $albumName;

    public $tries = 5;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $photo, string $albumName)
    {
        $this->photo = $photo;
        $this->albumName = $albumName;
    }

    /**
     * Get the middleware the job should pass through.
     *
     * @return array
     */
    public function middleware() {
        return [new WithoutOverlapping($this->photo)];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if (!is_dir(public_path() . '/storage/thumbnails/' . $this->albumName)) {
            File::makeDirectory(public_path() . '/storage/thumbnails/' . $this->albumName);
        }

        $img = Image::make(public_path() . $this->photo)->resize(380, 380, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $img->orientate();

        $thumbnailPath = str_replace('photos', 'thumbnails', $this->photo);
        $img->save(public_path() . $thumbnailPath);
    }
}
