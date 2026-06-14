<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BajuController extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel baju menggunakan Query Builder
        $baju = DB::table('baju')->get();


        return view('index_baju', ['baju' => $baju]);
    }
}
