<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JKPController extends Controller
{
    public function index()
    {
        $data = DB::table('jkp')->get();
        return view('jkp', compact('data'));
    }

    public function add()
    {
        return view('jkp_add');
    }

    public function submit(Request $request)
    {
        DB::table('jkp')->insert([
            'nama_tenaga_kerja' => $request->nama_tenaga_kerja,
            'no_kpj' => $request->no_kpj,
            'perusahaan' => $request->perusahaan,
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('jkp')->with('success','1');
    }

    public function edit($id)
    {
        $data = DB::table('jkp')->where('id', $id)->first();
        return view('jkp_edit', compact('data'));
    }

    public function update(Request $request)
    {
        DB::table('jkp')->where('id', $request->id)->update([
            'nama_tenaga_kerja' => $request->nama_tenaga_kerja,
            'no_kpj' => $request->no_kpj,
            'perusahaan' => $request->perusahaan,
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('jkp')->with('success','1');
    }

    public function delete($id)
    {
        DB::table('jkp')->where('id', $id)->delete();
        return redirect()->route('jkp')->with('success','1');
    }
}
