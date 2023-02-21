<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TmAgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tas = 
        [
            [
                'agama' => "Islam",
                "created_at"=> now()
            ],
            [
                
                'agama' => "Katholik",
                "created_at" => now()
            ],
            [
                'agama' => "Protestan",
                "created_at" => now()
            ],
            [
                
                'agama' => "Hindu",
                "created_at" => now()
            ],
            [
                
                'agama' => "Buddha",
                "created_at" => now()
            ],
            [
                
                'agama' => "Konghucu",
                "created_at" => now()
            ],
        ];

        DB::table('tm_agamas')->insert($tas);
    }
}
