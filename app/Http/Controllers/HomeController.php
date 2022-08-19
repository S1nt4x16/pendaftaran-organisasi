<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $periode = DB::table('tm_periodes')
            ->select("periode")
            ->where('aktif', 'Y')
            ->first();
        $jml_pendaftaran = DB::table('pendaftarans as a')
            ->join('tm_periodes as b', 'a.id_periode', '=', 'b.id' )
            ->select('id')
            ->count();
       $jml_divisi_rpl = DB::table('pendaftarans as a')
            ->join('tm_divisis as b', 'a.id_divisi', '=', 'b.id' )
            ->select('id')
            ->where('id_divisi', '1')
            ->count();
       $jml_divisi_tkj = DB::table('pendaftarans as a')
            ->join('tm_divisis as b', 'a.id_divisi', '=', 'b.id' )
            ->select('id')
            ->where('id_divisi', '2')
            ->count();
       $jml_divisi_mm = DB::table('pendaftarans as a')
            ->join('tm_divisis as b', 'a.id_divisi', '=', 'b.id' )
            ->select('id')
            ->where('id_divisi', '3')
            ->count();
        $jenis_kelamin_l = DB::table('pendaftarans')
            ->select("id")
            ->where('jenis_kelamin', 'L')
            ->count();
        $jenis_kelamin_p = DB::table('pendaftarans')
            ->select("id")
            ->where('jenis_kelamin', 'P')
            ->count();
        $agama_i = DB::table('pendaftarans as a')
            ->join('tm_agamas as b', 'a.id_agama', '=', 'b.id' )
            ->select('id')
            ->where('id_agama', '1')
            ->count();
        $agama_k = DB::table('pendaftarans as a')
            ->join('tm_agamas as b', 'a.id_agama', '=', 'b.id' )
            ->select('id')
            ->where('id_agama', '2')
            ->count();
        $agama_p = DB::table('pendaftarans as a')
            ->join('tm_agamas as b', 'a.id_agama', '=', 'b.id' )
            ->select('id')
            ->where('id_agama', '3')
            ->count();
        $agama_h = DB::table('pendaftarans as a')
            ->join('tm_agamas as b', 'a.id_agama', '=', 'b.id' )
            ->select('id')
            ->where('id_agama', '4')
            ->count();
        $agama_b = DB::table('pendaftarans as a')
            ->join('tm_agamas as b', 'a.id_agama', '=', 'b.id' )
            ->select('id')
            ->where('id_agama', '5')
            ->count();
        $agama_ko = DB::table('pendaftarans as a')
            ->join('tm_agamas as b', 'a.id_agama', '=', 'b.id' )
            ->select('id')
            ->where('id_agama', '6')
            ->count();
        $izin_ortu_y = DB::table('pendaftarans as a')
            ->join('tm_izin_ortus as b', 'a.id_izin_ortu', '=', 'b.id' )
            ->select('id')
            ->where('id_izin_ortu', '1')
            ->count();
        $izin_ortu_t = DB::table('pendaftarans as a')
            ->join('tm_izin_ortus as b', 'a.id_izin_ortu', '=', 'b.id' )
            ->select('id')
            ->where('id_izin_ortu', '2')
            ->count();
        
        
        return view('home',
            [
                'periode' => $periode,
                'pendaftaran_jml' => $jml_pendaftaran,
                'divisi_jml_rpl' => $jml_divisi_rpl,
                'divisi_jml_tkj' => $jml_divisi_tkj,
                'divisi_jml_mm' => $jml_divisi_mm,
                'laki' => $jenis_kelamin_l,
                'perempuan' => $jenis_kelamin_p,
                'islam' => $agama_i,
                'katholik' => $agama_k,
                'protestan' => $agama_p,
                'hindu' => $agama_h,
                'buddha' => $agama_b,
                'konghucu' => $agama_ko,
                'ya' => $izin_ortu_y,
                'tidak' => $izin_ortu_t
            ]);
    }

    public function dashboard() {
        return view('dashboard');
    }
}
