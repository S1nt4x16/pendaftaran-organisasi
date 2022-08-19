<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TmIzinOrtuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tios = 
        [
            [
                'izin_ortu' => "Ya",
                "created_at"=> now()
            ],
            [
                
                'izin_ortu' => "Tidak",
                "created_at" => now()
            ],
        ];

        DB::table('tm_izin_ortus')->insert($tios);
    }
}
