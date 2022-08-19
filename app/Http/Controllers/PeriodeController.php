<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeriodeController extends Controller
{
    public function index()
    {
        $periode = DB::table('tm_periodes')
            ->select("id", "periode", "aktif", "created_at")
            ->get();

        return view('crud_periode.index_periode', ["periode" => $periode]);
    }

    public function create() 
    {
        return view('crud_periode.create_periode');   
    }

    public function store(Request $request)
    {
        $periode = $request->input('periode');
        $aktif = $request->input('aktif');

        DB::table('tm_periodes')
        ->insert([
            'periode'=> $periode,
            'aktif' => $aktif,
            'created_at' => now()
        ]);

        return redirect()->route('periode_master');
          
    }

    public function edit($id)
    {
        $periode = DB::table('tm_periodes')
            ->select("periode", "aktif")
            ->where('id',$id)
            ->first();
        return view('crud_periode.edit_periode', [
            "p" => $periode,
            "id" => $id
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $periode = $request->input('periode');
        $aktif = $request->input('aktif');

        DB::table('tm_periodes')
        ->where('id', $id)
        ->update([

            'periode' => $periode,
            'aktif' => $aktif,
            'created_at' => now()

        ]);

        return redirect()->route('periode_master');
    }

    public function delete($id)
    {
        DB::table('tm_periodes')->where('id', $id)->delete();

        return redirect()->route('periode_master');
    }
}
