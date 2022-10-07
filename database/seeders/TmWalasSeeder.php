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
                    'walas' => "FIKRI MAULANA RIDHO, S.PD.",
                    "created_at" => now()
                ],
                [

                    'walas' => "IKA MUHARYANI, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "ADAM JULIO WASKITO, S.PD.",
                    "created_at" => now()
                ],
                [

                    'walas' => "AHMAD RIFAI, S.AG.",
                    "created_at" => now()
                ],
                [
                    'walas' => "ANNISA MARHEKIYANA, S.PD.",
                    "created_at" => now()
                ],
                [

                    'walas' => "RIZKY JULIAN PANGESTU AJI, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "DWI ANANTO KUSUMO, S.PD.",
                    "created_at" => now()
                ],
                [

                    'walas' => "ASIH MULYANI, S.KOM.",
                    "created_at" => now()
                ],
                [
                    'walas' => "LARISKA SAPTIANI, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "DWI APRIANI, S.PD.",
                    "created_at" => now()
                ],
                [

                    'walas' => "AI WARNI, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "ILMA ZULIA, S.T.",
                    "created_at" => now()
                ],
                [

                    'walas' => "PURWONUGROHO, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "ASYFA QOLBI RAKHAPUTRY.",
                    "created_at" => now()
                ],
                [

                    'walas' => "N. SANTI SITI N., S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "INTAN BAEDARI, S.PD.",
                    "created_at" => now()
                ],
                [

                    'walas' => "KEMALA SARAS RIANTY, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "YUSI RAKHMAH WATI, S.SAS.",
                    "created_at" => now()
                ],
                [
                    'walas' => "RIZKY NURUL HIDAYAH, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "MUKTI ALI, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "DHIENA FARIDA, S.T.",
                    "created_at" => now()
                ],
                [
                    'walas' => "ADITYA DWI NUGROHO, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "IMANUDIN HIDAYAT, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "NURZAMAN, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "GINA FARIANI, S.P.",
                    "created_at" => now()
                ],
                [
                    'walas' => "GIYANTI, S.PD.",
                    "created_at" => now()
                ],

                [
                    'walas' => "MUHAMMAD FALAHAEN JIDDAN, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "DWI PRATIWI, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "Dra. INDIATI SRI HARYONO.",
                    "created_at" => now()
                ],
                [
                    'walas' => "TITI RAHMAWATI, S.SI.",
                    "created_at" => now()
                ],
                [
                    'walas' => "JUJU JURIAH, S.SI.",
                    "created_at" => now()
                ],
                [
                    'walas' => "ARIE SUCIPTO, S.SS.",
                    "created_at" => now()
                ],
                [
                    'walas' => "IWAN SUTIAWAN, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "DIANA MUSTIKA SARI, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "GIRI INDAH SARI, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "SUPRIYADI, S.KOM.",
                    "created_at" => now()
                ],
                [
                    'walas' => "Dra. AI NURFARIDAH",
                    "created_at" => now()
                ],
                [
                    'walas' => "SRI HAYATI, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "TIODORA SABARINA, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "SRI MILDAWATI, M.PD.",
                     "created_at" => now()
                ],
                [
                    'walas' => "WIRYA AINI, M.PD.", 
                    "created_at" => now()
                ],
                [
                    'walas' => "FIA FIANTI, S.PD.",
                     "created_at" => now()
                ],
                [
                    'walas' => "MOCHAMAD ILHAM LAHIA, S.PAR.", 
                    "created_at" => now()
                ],
                [
                    'walas' => "Dra. HJ. RINI KOMALASARI",
                     "created_at" => now()
                ],
                [
                    'walas' => "SRI WILUJENG S.PD, M.PD",
                    "created_at" => now()
                ],
                [
                    'walas' => "SYARIFAH, S.PDI.",
                    "created_at" => now()
                ],
                [
                    'walas' => "IKE YUNIAWATI, S.PD.",
                    "created_at" => now()
                ],

                [
                    'walas' => "FREDDY ANGGIAT, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "YANUAR HARDI H., S.PD.", 
                    "created_at" => now()
                ],
                [
                    'walas' => "IKA SEPTIANAWATI, S.PD.", 
                    "created_at" => now()
                
                ],
                [
                    'walas' => "TRI RAHAYU, S.PD.", 
                    "created_at" => now()
                ],
                [
                    'walas' => "LIDDIA HENDRIATI, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "JANUAR AMBARWATI, S.PD.",
                    "created_at" => now()
                ],
                [
                    'walas' => "FERY YANTINI, S.PD.",
                    "created_at" => now()
                ],


            ];

        DB::table('tm_walass')->insert($tws);
    }
}
