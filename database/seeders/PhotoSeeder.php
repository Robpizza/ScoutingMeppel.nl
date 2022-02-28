<?php

namespace Database\Seeders;

use App\Jobs\GenerateThumbnails;
use App\Models\Album;
use App\Models\Photo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class PhotoSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = Album::all();

        Log::info('Importing all photos of ' . sizeof($albums) . ' albums.');


        foreach ($albums as $album) {
            $photos = File::glob(public_path() . $album->path . '/*.*');


            $allowedMimeTypes = [ 'image/jpeg', 'image/gif', 'image/png', 'image/bmp', 'image/svg+xml' ];
            $photos = str_replace(public_path(), '', $photos);

            foreach ($photos as $photo) {
                $contentType = mime_content_type(public_path() . $photo);
                // Check content type
                if (in_array($contentType, $allowedMimeTypes) && !in_array($photo, array( ".", ".." ))) {
                    if (!is_dir($photo)) {
                        DB::table('photos')->insert([ 'album_id' => $album->id, 'path' => $photo ]);

                        GenerateThumbnails::dispatch($photo, $album->name);
                    }
                }
            }
        }
    }
}
