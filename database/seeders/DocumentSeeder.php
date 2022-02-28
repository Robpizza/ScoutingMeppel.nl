<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documents')->insert([ 'name' => 'Regeling_verhuur', 'type' => 'pdf', 'path' => '/storage/documents/Regeling_verhuur.pdf', 'size' => '290 KB' ]);
        DB::table('documents')->insert([ 'name' => 'Gezondheidsformulier', 'type' => 'docx', 'path' => '/storage/documents/Gezondheidsformulier.docx', 'size' => '337 KB' ]);
        DB::table('documents')->insert([ 'name' => 'Format_Inschrijfformulier_Scoutinggroep', 'type' => 'docx', 'path' => '/storage/documents/Inschrijfformulier.docx', 'size' => '196 KB' ]);
    }
}
