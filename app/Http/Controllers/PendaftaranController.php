<?php

namespace App\Http\Controllers;

use App\exel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\ExcelExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class PendaftaranController extends Controller
{
    public function index() 
    {
        $pendaftaran = DB::table('pendaftarans as a')
        ->join('tm_periodes as b', 'a.id_periode', '=', 'b.id')
        ->join('tm_divisis as c', 'a.id_divisi', '=', 'c.id')
        ->select('a.id', 'b.periode', 'a.nama_lengkap', 'a.id_no',
             'c.divisi', 'a.created_at', 'a.updated_at')
        ->get();

        return view('crud_pendaftaran.index_pendaftaran', 
            ["pendaftaran" => $pendaftaran]);
    }

    public function excelexport(){

        $data = DB::table('pendaftarans as a')
        ->join('tm_periodes as b', 'a.id_periode', '=', 'b.id')
        ->join('tm_divisis as c', 'a.id_divisi', '=', 'c.id')
        ->select('b.periode', 'a.nama_lengkap', 'a.id_no',
             'c.divisi', 'a.created_at', 'a.updated_at')
        ->get();
        return Excel::download(new ExcelExport($data), 'CalonAnggotaKopasusIT.xlsx');
    }

    public function edit($id) 
    {
        $pendaftaran = DB::table('pendaftarans')
            ->select('nama_lengkap', 'tempat_lahir', 
                'tanggal_lahir', 'jenis_kelamin', 'id_agama', 
                'id_kelas', 'id_walas', 'id_divisi', 'alasan', 'id_izin_ortu', 
                'hp_siswa', 'hp_ortu', 'akun_ig')
            ->where('id',$id)
            ->first();
        $agama = DB::table('tm_agamas')
            ->select("id", "agama")
            ->get();
        $divisi = DB::table('tm_divisis')
            ->select("id", "divisi", "divisi_lengkap")
            ->get();
        $izinOrtu = DB::table('tm_izin_ortus')
            ->select("id", "izin_ortu")
            ->get();
        $kelas = DB::table('tm_kelass')
            ->select("id", "kelas")
            ->get();
        $walas = DB::table('tm_walass')
            ->select("id", "walas")
            ->get();
        return view('crud_pendaftaran.edit_pendaftaran', [
            "pf" => $pendaftaran,
            "id" => $id,
            'agama' => $agama,
            'divisi' => $divisi,
            'izinOrtu' => $izinOrtu,
            'kelas' => $kelas,
            'walas' => $walas
        ]);
    }

    public function update(Request $request) 
    {
        $id = $request->input('id');
        $namaLengkap = $request->input('nama_lengkap');
        $tempatLahir = $request->input('tempat_lahir');
        $tanggalLahir = $request->input('tanggal_lahir');
        $jenisKelamin = $request->input('jenis_kelamin');
        $alasan = $request->input('alasan');
        $hpSiswa = $request->input('hp_siswa');
        $hpOrtu = $request->input('hp_ortu');
        $akunIG = $request->input('akun_ig');
        $agama = $request->input('agama');
        $divisi = $request->input('divisi');
        $izinOrtu = $request->input('izin_ortu');
        $kelas = $request->input('kelas');
        $walas = $request->input('walas');

        DB::table('pendaftarans')
        ->where('id', $id)
        ->update([
            'nama_lengkap' => $namaLengkap,
            'tempat_lahir' => $tempatLahir,
            'tanggal_lahir' => $tanggalLahir,
            'jenis_kelamin' => $jenisKelamin,
            'alasan' => $alasan,
            'hp_siswa' => $hpSiswa,
            'hp_ortu' => $hpOrtu,
            'akun_ig' => $akunIG,
            'id_agama' => $agama,
            'id_divisi' => $divisi,
            'id_izin_ortu' => $izinOrtu,
            'id_kelas' => $kelas,
            'id_walas' => $walas,
            'created_at' => now()

        ]);

        return redirect()->route('pendaftaran_master');

    }

    public function delete($id) 
    {
        DB::table('pendaftarans')->where('id', $id)->delete();

        return redirect()->route('pendaftaran_master');
    }
}
