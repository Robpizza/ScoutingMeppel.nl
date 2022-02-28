<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dir = public_path('storage/photos');
        $cdir = scandir($dir);
        foreach ($cdir as $key => $value)
        {
            if (!in_array($value,array(".","..")))
            {
                if(is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                    DB::table('albums')->insert([
                        'name' => $value,
                        'path' => '/storage/photos/' . $value
                    ]);
                }
            }
        }
    }
}
