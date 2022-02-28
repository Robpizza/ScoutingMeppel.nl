<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([ GroupSeeder::class, DocumentSeeder::class, UserSeeder::class ]);
        $this->call([ AlbumSeeder::class, PhotoSeeder::class ]);
    }
}
