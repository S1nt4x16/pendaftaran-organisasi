<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WalasController extends Controller
{
    public function index()
    {
        $walas = DB::table('tm_walass')
        ->select("id", "walas", "created_at")
        ->get();

        return view('crud_walas.index_walas', ["walas" => $walas]);
    }

    public function create() 
    {
        return view('crud_walas.create_walas');
    }

    public function store(Request $request)
    {
        $walas = $request->input('walas');

        $walas = DB::table('tm_walass')
        ->insert([

            'walas' => $walas,
            'created_at' => now()
        ]);

        return redirect()->route('walas_master');
    }

    public function edit($id)
    {
        $walas = DB::table('tm_walass')
            ->select("walas")
            ->where('id',$id)
            ->first();
        return view('crud_walas.edit_walas', [
            "w" => $walas,
            "id" => $id
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $walas = $request->input('walas');

        DB::table('tm_walass')
        ->where('id', $id)
        ->update([

            'walas' => $walas,
            'created_at' => now()

        ]);

        return redirect()->route('walas_master');
    }

    public function delete($id)
    {
        DB::table('tm_walass')->where('id', $id)->delete();

        return redirect()->route('walas_master');
    }
}
