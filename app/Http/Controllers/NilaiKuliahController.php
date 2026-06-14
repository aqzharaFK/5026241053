<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    // Menampilkan halaman index
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->get();
        return view('index_nilaikuliah', ['nilaikuliah' => $nilaikuliah]);
    }

    // Menampilkan halaman tambah data
    public function create()
    {
        return view('create');
    }

    // Memproses penyimpanan data ke database
    public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilai_angka,
            'SKS' => $request->sks
        ]);

        // Redirect kembali ke halaman index setelah menyimpan
        return redirect('/nilaikuliah');
    }
}
