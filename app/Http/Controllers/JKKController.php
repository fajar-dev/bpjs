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
        DB::table('agencies')->insert([
            'name' => $request->nama
        ]);
        return redirect()->route('jkk')->with('success','Notes have been added');
    }

    public function update(Request $request)
    {
        DB::table('agencies')->where('id', $request->id)->update([
            'name' => $request->nama
        ]);
        return redirect()->route('jkk')->with('success','Notes have been added');
    }

    public function delete($id)
    {
        DB::table('agencies')->where('id', $id)->delete();
        return redirect()->route('jkk')->with('success','Notes have been added');

    }
}