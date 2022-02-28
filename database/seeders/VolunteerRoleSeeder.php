<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VolunteerRoleSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('volunteer_roles')->insert([ 'slug' => 'bestuur', 'name' => 'Bestuur', ]);
        DB::table('volunteer_roles')->insert([ 'slug' => 'leiding', 'name' => 'Leiding', ]);
        DB::table('volunteer_roles')->insert([ 'slug' => 'stagiair', 'name' => 'Stagiair', ]);
    }
}
