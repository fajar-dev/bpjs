<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data['jkk'] = DB::table('jkk')->count();
        $data['jht'] = DB::table('jht')->count();
        $data['jp'] = DB::table('jp')->count();
        $data['jkp'] = DB::table('jkp')->count();
        return view('dashboard', compact('data'));
    }
}
