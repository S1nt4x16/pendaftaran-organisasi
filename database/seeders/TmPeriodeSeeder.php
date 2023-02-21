<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TmPeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tps = 
        [
            [
                'periode' => "2022",
                'aktif' => "Y",
                "created_at"=> now()
            ],
            [
                
                'periode' => "2021",
                'aktif' => "N",
                "created_at" => now()
            ],

        ];

        DB::table('tm_periodes')->insert($tps);
    }
}
