<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JPController extends Controller
{
    public function index()
    {
        $data = DB::table('jp')->get();
        return view('jp', compact('data'));
    }

    public function add()
    {
        return view('jp_add');
    }

    public function submit(Request $request)
    {
        DB::table('jp')->insert([
            'nama_tenaga_kerja' => $request->nama_tenaga_kerja,
            'no_kpj' => $request->no_kpj,
            'status_klime' => $request->status_klime,
            'tgl_pengajuan' => $request->tgl_pengajuan,
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('jp')->with('success','1');
    }

    public function edit($id)
    {
        $data = DB::table('jp')->where('id', $id)->get();
        return view('jp_adit', compact('data'));
    }

    public function update(Request $request)
    {
        DB::table('jp')->where('id', $request->id)->update([
            'nama_tenaga_kerja' => $request->nama_tenaga_kerja,
            'no_kpj' => $request->no_kpj,
            'status_klime' => $request->status_klime,
            'tgl_pengajuan' => $request->tgl_pengajuan,
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('jp')->with('success','1');
    }

    public function delete($id)
    {
        DB::table('jp')->where('id', $id)->delete();
        return redirect()->route('jp')->with('success','1');
    }
}
