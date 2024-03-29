<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerPendaftaran extends Controller
{
    public function index()
    {
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
        return view('index', 
        [
            'agama' => $agama,
            'divisi' => $divisi,
            'izinOrtu' => $izinOrtu,
            'kelas' => $kelas,
            'walas' => $walas
            
        ]);
    }

    public function store(Request $request)
    {

        $namaLengkap = $request->input('nama_lengkap');
        $tempatLahir = $request->input('tempat_lahir');
        $tanggalLahir = $request->input('tanggal_lahir');
        $jenisKelamin = $request->input('jenis_kelamin');
        $agama = $request->input('agama');
        $divisi = $request->input('divisi');
        $izinOrtu = $request->input('izin_ortu');
        $alasan = $request->input('alasan');
        $hpSiswa = $request->input('hp_siswa');
        $hpOrtu = $request->input('hp_ortu');
        $akunIg = $request->input('akun_ig');

        $validasi = DB::table('pendaftarans')
            ->where([['nama_lengkap', $request->nama_lengkap],
            ['id_divisi', $request->divisi],
            ['hp_siswa', $request->hp_siswa]])
            ->count();
        if (!empty($validasi)) {
            return redirect()->back()->with('error', 'Gagal Menambahkan Data, Data Sudah Ada / Sudah Terdaftar');
        }

        $idPeriode = DB::table('tm_periodes')
            ->select("id")
            ->where('aktif', 'Y')
            ->first();

        $maxIdNo = DB::table('pendaftarans')->max('id_no');
        $maxIdPlus = $maxIdNo + 1;
        $idNo = str_pad($maxIdPlus, 4, "0", STR_PAD_LEFT);

        DB::table('pendaftarans')
            ->insert([
                'nama_lengkap' => $namaLengkap,
                'tempat_lahir' => $tempatLahir,
                'tanggal_lahir' => $tanggalLahir,
                'jenis_kelamin' => $jenisKelamin,
                'id_agama' => $agama,
                'id_divisi' => $divisi,
                'id_izin_ortu' => $izinOrtu,
                'alasan' => $alasan,
                'hp_siswa' => $hpSiswa,
                'hp_ortu' => $hpOrtu,
                'akun_ig' => $akunIg,
                'id_periode' => $idPeriode->id,
                'id_no' => $idNo,
                'created_at' => now()
            ]);

        return redirect()->route('index')->with('success', 'Selamat Kamu Telah Mendaftar Kopasus IT, Data Sudah Diterima');
    }
}
