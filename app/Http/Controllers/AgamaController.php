<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AgamaController extends Controller
{
    public function index()
    {
        $agama = DB::table('tm_agamas')
            ->select("id", "agama", "created_at")
            ->get();
        return view('crud_agama.index_agama', ["agama" => $agama]);
    }

    public function create()
    {
        return view('crud_agama.create_agama');
    }

    public function store(Request $request)
    {
        $agama = $request->input('agama');

        DB::table('tm_agamas')
        ->insert([
            'agama'=> $agama,
            'created_at' => now()
        ]);

        return redirect()->route('agama_master');
          
    }

    public function edit($id)
    {
        $agama = DB::table('tm_agamas')
            ->select("agama")
            ->where('id',$id)
            ->first();
        return view('crud_agama.edit_agama', [
            "ag" => $agama,
            "id" => $id
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $agama = $request->input('agama');

        DB::table('tm_agamas')
        ->where('id', $id)
        ->update([

            'agama' => $agama,
            'created_at' => now()

        ]);

        return redirect()->route('agama_master');
    }

    public function delete($id) 
    {
        DB::table('tm_agamas')->where('id', $id)->delete();

        return redirect()->route('agama_master');
    }
}
