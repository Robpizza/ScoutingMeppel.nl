<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@scoutingmeppel.nl',
            'email_verified_at' => Carbon::now('Europe/Amsterdam')->toDateTime(),
            'password' => bcrypt('password')
        ]);
    }
}
