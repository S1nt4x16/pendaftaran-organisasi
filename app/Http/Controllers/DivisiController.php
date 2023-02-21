<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DivisiController extends Controller
{
    public function index()
    {
        $divisi = DB::table('tm_divisis')
            ->select("id", "divisi", "divisi_lengkap", "created_at")
            ->get();
        return view('crud_divisi.index_divisi', ["divisi" => $divisi]);
    }

    public function create()
    {
        return view('crud_divisi.create_divisi');
    }

    public function store(Request $request)
    {
        $divisi = $request->input('divisi');
        $divisi_lengkap = $request->input('divisi_lengkap');

        DB::table('tm_divisis')
        ->insert([
            'divisi'=> $divisi,
            'divisi_lengkap' => $divisi_lengkap,
            'created_at' => now()
        ]);

        return redirect()->route('divisi_master');
          
    }

    public function edit($id)
    {
        $divisi = DB::table('tm_divisis')
            ->select("divisi", "divisi_lengkap")
            ->where('id',$id)
            ->first();
        return view('crud_divisi.edit_divisi', [
            "dv" => $divisi,
            "id" => $id
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $divisi = $request->input('divisi');
        $divisi_lengkap = $request->input('divisi_lengkap');

        DB::table('tm_divisis')
        ->where('id', $id)
        ->update([

            'divisi' => $divisi,
            'divisi_lengkap' => $divisi_lengkap,
            'created_at' => now()

        ]);

        return redirect()->route('divisi_master');
    }

    public function delete($id) 
    {
        DB::table('tm_divisis')->where('id', $id)->delete();

        return redirect()->route('divisi_master');
    }
}
