<?php

namespace App\Http\Controllers;  // ← WAJIB ADA INI

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangbelanjaController extends Controller
{
    public function index()
    {
        $keranjang = DB::table('keranjangbelanja')->get();
        return view('index_keranjang', ['keranjang' => $keranjang]);
    }

    public function tambah()
    {
        return view('keranjangbeli');
    }

    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah'     => $request->Jumlah,
            'Harga'      => $request->Harga,
        ]);
        return redirect('/keranjang');
    }

    public function hapus($id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();
        return redirect('/keranjang');
    }
}
