<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IzinOrtuController extends Controller
{
    public function index()
    {
        $IzinOrtu = DB::table('tm_izin_ortus')
            ->select("id", "izin_ortu", "created_at")
            ->get();
        return view('crud_izin_ortu.index_izin_ortu', ["izin_ortu" => $IzinOrtu]);
    }

    public function create()
    {
        return view('crud_izin_ortu.create_izin_ortu');
    }

    public function store(Request $request)
    {
        $IzinOrtu = $request->input('izin_ortu');

        DB::table('tm_izin_ortus')
        ->insert([
            'izin_ortu'=> $IzinOrtu,
            'created_at' => now()
        ]);

        return redirect()->route('izin_ortu_master');
          
    }

    public function edit($id)
    {
        $IzinOrtu = DB::table('tm_izin_ortus')
            ->select("izin_ortu")
            ->where('id',$id)
            ->first();
        return view('crud_izin_ortu.edit_izin_ortu', [
            "io" => $IzinOrtu,
            "id" => $id
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $IzinOrtu = $request->input('izin_ortu');

        DB::table('tm_izin_ortus')
        ->where('id', $id)
        ->update([

            'izin_ortu' => $IzinOrtu,
            'created_at' => now()

        ]);

        return redirect()->route('izin_ortu_master');
    }

    public function delete($id) 
    {
        DB::table('tm_izin_ortus')->where('id', $id)->delete();

        return redirect()->route('izin_ortu_master');
    }
}
