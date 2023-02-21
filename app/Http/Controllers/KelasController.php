<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function index() 
    {
        $kelas = DB::table('tm_kelass')
        ->select("id", "kelas", "created_at")
        ->get();
        return view('crud_kelas.index_kelas', ["kelas" => $kelas]);
    }

    public function create() 
    {
        return view('crud_kelas.create_kelas');   
    }

    public function store(Request $request)
    {
        $kelas = $request->input('kelas');

        DB::table('tm_kelass')
        ->insert([
            'kelas'=> $kelas,
            'created_at' => now()
        ]);

        return redirect()->route('kelas_master');
          
    }

    public function edit($id)
    {
        $kelas = DB::table('tm_kelass')
            ->select("kelas")
            ->where('id',$id)
            ->first();
        return view('crud_kelas.edit_kelas', [
            "k" => $kelas,
            "id" => $id
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $kelas = $request->input('kelas');

        DB::table('tm_kelass')
        ->where('id', $id)
        ->update([

            'kelas' => $kelas,
            'created_at' => now()

        ]);

        return redirect()->route('kelas_master');
    }

    public function delete($id)
    {
        DB::table('tm_kelass')->where('id', $id)->delete();

        return redirect()->route('kelas_master');
    }
}
