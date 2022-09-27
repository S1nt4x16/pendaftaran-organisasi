<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $period = now()->format('Y');
        $periodSub1 = now()->subYear()->format('Y');
        $periodSub2 = now()->subYears(2)->format('Y');
        $periode = DB::table('tm_periodes')
            ->select("periode")
            ->where('aktif', 'Y')
            ->first();
        $jml_pendaftaran = DB::table('pendaftarans as a')
            ->join('tm_periodes as b', 'a.id_periode', '=', 'b.id' )
            ->select('id')
            ->where('b.periode', $period)
            ->count();
        $jml_pendaftaran1 = DB::table('pendaftarans as a')
            ->join('tm_periodes as b', 'a.id_periode', '=', 'b.id' )
            ->select('id')
            ->where('b.periode', $periodSub1)
            ->count();
        $jml_pendaftaran2 = DB::table('pendaftarans as a')
            ->join('tm_periodes as b', 'a.id_periode', '=', 'b.id' )
            ->select('id')
            ->where('b.periode', $periodSub2)
            ->count();
       $jml_divisi_rpl = DB::table('pendaftarans as a')
            ->join('tm_divisis as b', 'a.id_divisi', '=', 'b.id' )
            ->join('tm_periodes as c', 'a.id_periode', '=',  'c.id')
            ->where(['b.divisi', 'RPL'],['c.periode', $period])
            ->count();
       $jml_divisi_tkj = DB::table('pendaftarans as a')
            ->join('tm_divisis as b', 'a.id_divisi', '=', 'b.id' )
            ->join('tm_periodes as c', 'a.id_periode', '=', 'c.id')
            ->where(['b.divisi', 'TKJ'], ['c.periode', $periodSub1])
            ->count();
       $jml_divisi_mm = DB::table('pendaftarans as a')
            ->join('tm_divisis as b', 'a.id_divisi', '=', 'b.id' )
            ->join('tm_periodes as c', 'a.id_periode', '=', 'c.id')
            ->where(['b.divisi', 'MM'],['c.periode', $periodSub2])
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
                'period' => $period,
                'periodSub1' => $periodSub1,
                'periodSub2' => $periodSub2,
                'jml_pendaftaran' => $jml_pendaftaran,
                'jml_pendaftaran1' => $jml_pendaftaran1,
                'jml_pendaftaran2' => $jml_pendaftaran2,
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
