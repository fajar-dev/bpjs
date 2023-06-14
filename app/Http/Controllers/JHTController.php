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

}
