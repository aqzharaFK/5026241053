<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangbelanjaController extends Controller
{
    // Menampilkan semua data keranjang belanja
    public function index()
    {
        $keranjang = DB::table('keranjangbelanja')->paginate(10);

        return view('index', ['keranjang' => $keranjang]);
    }

    // Menampilkan form tambah data (Tombol Beli)
    public function tambah()
    {
        return view('tambah');
    }

    // Menyimpan data baru ke tabel keranjangbelanja
    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah'     => $request->Jumlah,
            'Harga'      => $request->Harga,
        ]);

        return redirect('/keranjang');
    }

    // Menghapus data (Tombol Batal)
    public function hapus($id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        return redirect('/keranjang');
    }
}
