<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JHTController extends Controller
{
    public function index()
    {
        $data = DB::table('jht')->get();
        return view('jht', compact('data'));
    }

    public function add()
    {
        return view('jht_add');
    }

    public function submit(Request $request)
    {
        DB::table('jht')->insert([
            'nama_tenaga_kerja' => $request->nama_tenaga_kerja,
            'no_kpj' => $request->no_kpj,
            'status_klime' => $request->status_klime,
            'tgl_pengajuan' => $request->tgl_pengajuan,
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('jht')->with('success','1');
    }

    public function edit($id)
    {
        $data = DB::table('jht')->where('id', $id)->first();
        return view('jht_edit', compact('data'));
    }

    public function update(Request $request)
    {
        DB::table('jht')->where('id', $request->id)->update([
            'nama_tenaga_kerja' => $request->nama_tenaga_kerja,
            'no_kpj' => $request->no_kpj,
            'status_klime' => $request->status_klime,
            'tgl_pengajuan' => $request->tgl_pengajuan,
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('jht')->with('success','1');
    }

    public function delete($id)
    {
        DB::table('jht')->where('id', $id)->delete();
        return redirect()->route('jht')->with('success','1');
    }
}
