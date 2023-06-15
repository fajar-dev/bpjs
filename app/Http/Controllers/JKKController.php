<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JKKController extends Controller
{
    public function index()
    {
        $data = DB::table('jkk')->get();
        return view('jkk', compact('data'));
    }

    public function add()
    {
        return view('jkk_add');
    }

    public function submit(Request $request)
    {
        DB::table('jkk')->insert([
            'nama_tenaga_kerja' => $request->nama_tenaga_kerja,
            'no_kpj' => $request->no_kpj,
            'perusahaan' => $request->perusahaan,
            'tgl_terima_berkas' => $request->tgl_terima_berkas,
            'rs' => $request->rs,
            'tagihan' => $request->tagihan,
            'stmb' => $request->stmb,
            'kekurangan_berkas' => $request->kekurangan_berkas
        ]);
        return redirect()->route('jkk')->with('success','1');
    }

    public function edit($id)
    {
        $data = DB::table('jkk')->where('id', $id)->first();
        return view('jkk_edit', compact('data'));
    }

    public function update(Request $request)
    {
        DB::table('jkk')->where('id', $request->id)->update([
            'nama_tenaga_kerja' => $request->nama_tenaga_kerja,
            'no_kpj' => $request->no_kpj,
            'perusahaan' => $request->perusahaan,
            'tgl_terima_berkas' => $request->tgl_terima_berkas,
            'rs' => $request->rs,
            'tagihan' => $request->tagihan,
            'stmb' => $request->stmb,
            'kekurangan_berkas' => $request->kekurangan_berkas
        ]);
        return redirect()->route('jkk')->with('success','1');
    }

    public function delete($id)
    {
        DB::table('jkk')->where('id', $id)->delete();
        return redirect()->route('jkk')->with('success','1');
    }
}