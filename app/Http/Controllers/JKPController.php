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
}
