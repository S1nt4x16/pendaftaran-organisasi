<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TmKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tks = 
        [
            [
                'kelas' => "X.IPA-1",
                "created_at"=> now()
            ],
            [
                
                'kelas' => "X.IPA-2",
                "created_at" => now()
            ],
            [
                
                'kelas' => "X.IPA-3",
                "created_at" => now()
            ],
            [
                
                'kelas' => "X.IPA-4",
                "created_at" => now()
            ],
            [
                
                'kelas' => "X.IPA-5",
                "created_at" => now()
            ],
            [
                'kelas' => "X.IPS-1",
                "created_at"=> now()
            ],
            [
                
                'kelas' => "X.IPS-2",
                "created_at" => now()
            ],
            [
                
                'kelas' => "X.IPS-3",
                "created_at" => now()
            ],
            [
                
                'kelas' => "X.IPS-4",
                "created_at" => now()
            ],
            [
                
                'kelas' => "X.U.A-1",
                "created_at" => now()
            ],
            
            [
                
                'kelas' => "X.U.A-2",
                "created_at" => now()
            ],
            [
                
                'kelas' => "X.U.A-3",
                "created_at" => now()
            ],
            [
                
                'kelas' => "X.U.A-4",
                "created_at" => now()
            ],
            [
                
                'kelas' => "X.U.A-5",
                "created_at" => now()
            ],
            [
                
                'kelas' => "X.U.A-6",
                "created_at" => now()
            ],
            [
                
                'kelas' => "X.U.S-1",
                "created_at" => now()
            ],
            [
                
                'kelas' => "X.U.S-2",
                "created_at" => now()
            ],
            [
                
                'kelas' => "X.U.S-3",
                "created_at" => now()
            ],
            [
                'kelas' => "XI.IPA-1",
                "created_at"=> now()
            ],
            [
                
                'kelas' => "XI.IPA-2",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XI.IPA-3",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XI.IPA-4",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XI.IPA-5",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XI.IPS-1",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XI.IPS-2",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XI.IPS-3",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XI.U.A-1",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XI.U.A-2",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XI.U.A-3",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XI.U.A-4",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XI.U.A-5",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XI.U.A-6",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XI.U.A-7",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XI.U.A-8",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XI.U.S-1",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XI.U.S-2",
                "created_at" => now()
            ],
            [
                'kelas' => "XII.IPA-1",
                "created_at"=> now()
            ],
            [
                
                'kelas' => "XII.IPA-2",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XII.IPA-3",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XII.IPA-4",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XII.IPA-5",
                "created_at" => now()
            ],
            [
                'kelas' => "XII.IPS-1",
                "created_at"=> now()
            ],
            [
                
                'kelas' => "XII.IPS-2",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XII.IPS-3",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XII.U.A-1",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XII.U.A-2",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XII.U.A-3",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XII.U.A-4",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XII.U.A-5",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XII.U.A-6",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XII.U.S-1",
                "created_at" => now()
            ],
            [
                
                'kelas' => "XII.U.S-2",
                "created_at" => now()
            ],
            

        ];

        DB::table('tm_kelass')->insert($tks);
    }
}
