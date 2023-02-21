<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TmDivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tds = 
        [
            [
                'divisi' => "RPL",
                'divisi_lengkap' => "Rekayasa Perangkat Lunak",
                "created_at"=> now()
            ],
            [
                
                'divisi' => "TKJ",
                'divisi_lengkap' => "Teknik Komputer Dan Jaringan",
                "created_at" => now()
            ],
            [
                'divisi' => "MM",
                'divisi_lengkap' => "Multimedia",
                "created_at" => now()
            ],
        ];

        DB::table('tm_divisis')->insert($tds);
    }
}
