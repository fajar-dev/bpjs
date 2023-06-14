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
}
