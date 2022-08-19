<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TmWalasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tws =
            [
                [
                    'walas' => "SUPRIYADI, S.Kom.",
                    "created_at" => now()
                ],
                [

                    'walas' => "N. SANTI SITI N., S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "DIANA MUSTIKA SARI, S.Pd.",
                    "created_at" => now()
                ],
                [

                    'walas' => "MOCHAMAD ILHAM LAHIA, S.PAR.",
                    "created_at" => now()
                ],
                [
                    'walas' => "TITI RAHMAWATI, S.SI.",
                    "created_at" => now()
                ],
                [

                    'walas' => "ADITYA DWI NUGROHO, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "MUKTI ALI, S.PD.",
                    "created_at" => now()
                ],
                [

                    'walas' => "GIYANTI, S.Pd.",
                    "created_at" => now()
                ],
                [
                    'walas' => "YUSI RAKHMAH WATI.",
                    "created_at" => now()
                ],
                [
                    'walas' => "LARISKA SAPTIANI, S.PD.",
                    "created_at" => now()
                ],
                [

                    'walas' => "NIKEN, S.SI.",
                    "created_at" => now()
                ],
                [
                    'walas' => "DWI PRATIWI, S.PD.",
                    "created_at" => now()
                ],
                [

                    'walas' => "DWI APRIANI, S.Pd.",
                    "created_at" => now()
                ],
                [
                    'walas' => "ILMA ZULIA, S.T.",
                    "created_at" => now()
                ],
                [

                    'walas' => "RIZKY NURUL HIDAYAH, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "ARIE SUCIPTO, S.SS.",
                    "created_at" => now()
                ],
                [

                    'walas' => "KEMALA SARAS RIANTY, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "AI WARNI, S.Pd.",
                    "created_at" => now()
                ],
                [
                    'walas' => "NURZAMAN, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "IMANUDDIN, S.Pd.",
                    "created_at" => now()
                ],

                [
                    'walas' => "Dra. NAOMI MINARDO SIHOMBING.",
                    "created_at" => now()
                ],


                [
                    'walas' => "RIZKY JULIAN PANGESTU AJI,S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "ASIH MULYANI, S.Kom.",
                    "created_at" => now()
                ],
                [
                    'walas' => "SITI UBAHIYAH, S.E.",
                    "created_at" => now()
                ],
                [
                    'walas' => "GINA FARIANI, S.P.",
                    "created_at" => now()
                ],
                [
                    'walas' => "GIRI INDAH SARI, S.Pd.",
                    "created_at" => now()
                ],

                [
                    'walas' => "IWAN SUTIAWAN, S.Pd.",
                    "created_at" => now()
                ],
                [
                    'walas' => "JUJU JURIAH, S.P.",
                    "created_at" => now()
                ],
                [
                    'walas' => "PURWONUGROHO, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "DWI ANANTO KUSUMO.",
                    "created_at" => now()
                ],
                [
                    'walas' => "TIODORA SABARINA, S.Pd.",
                    "created_at" => now()
                ],
                [
                    'walas' => "IKA MUHARYANI, S.Pd.",
                    "created_at" => now()
                ],
                [
                    'walas' => "Dra. INDIATI SRI HARYONO.",
                    "created_at" => now()
                ],
                [
                    'walas' => "INTAN BAEDARI, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "FIKRI MAULANA RIDHO, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "Dra. HJ. RINI KOMALASARI.",
                    "created_at" => now()
                ],
                [
                    'walas' => "WIRYA AINI, S.Pd.",
                    "created_at" => now()
                ],
                [
                    'walas' => "YANUAR HARDI H., S.Pd.",
                    "created_at" => now()
                ],
                [
                    'walas' => "Dra. AI NURFARIDAH.",
                    "created_at" => now()
                ],
                [
                    'walas' => "SRI HAYATI, S.Pd.",
                     "created_at" => now()
                ],
                [
                    'walas' => "TRI RAHAYU, S.Pd.", 
                    "created_at" => now()
                ],
                [
                    'walas' => "NUR'AINI, S.Pd.",
                     "created_at" => now()
                ],
                [
                    'walas' => "FERY YANTINI, S.Pd.", 
                    "created_at" => now()
                ],
                [
                    'walas' => "FIA FIANTI, S.Pd.",
                     "created_at" => now()
                ],
                [
                    'walas' => "LIDDIA HENDRIATI, S.Pd.",
                    "created_at" => now()
                ],
                [
                    'walas' => "IKE YUNIAWATI, S.Pd.",
                    "created_at" => now()
                ],
                [
                    'walas' => "SRI WILUJENG S.Pd, M.Pd.",
                    "created_at" => now()
                ],

                [
                    'walas' => "IKA SEPTIANAWATI, S.Pd.",
                    "created_at" => now()
                ],
                [
                    'walas' => "FREDDY ANGGIAT, S.Pd.", 
                    "created_at" => now()
                ],
                [
                    'walas' => "SRI MILDAWATI, M.Pd.", 
                    "created_at" => now()
                
                ],
                [
                    'walas' => "JANUAR AMBARWATI, S.Pd.", 
                    "created_at" => now()
                ],
                [
                    'walas' => "SYARIFAH, S.PdI.",
                    "created_at" => now()
                ],


            ];

        DB::table('tm_walass')->insert($tws);
    }
}
