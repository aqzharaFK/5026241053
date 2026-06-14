<!DOCTYPE html>
<html lang="id">

<head>
    <title>5026241053 Muhammad Aqzhara Fathyan Khairi - Keranjang Belanja</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="container">
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h3>5026241053 Muhammad Aqzhara Fathyan Khairi</h3>
            <h6>Latihan 1 - Keranjang Belanja</h6>
        </div>

        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/pegawai">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/baju">baju</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/keranjang">Keranjang Belanja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nilaikuliah">Nilai Kuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/siswa">Pertemuan 14</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#">EAS</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="mt-4">
            <h2 class="mb-4">🛒 Keranjang Belanja</h2>

    <a href="/tambah" class="btn btn-primary mb-3">+ Beli</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per Item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($keranjang as $item)
            <tr>
                <td>{{ $item->ID }}</td>
                <td>{{ $item->KodeBarang }}</td>
                <td>{{ $item->Jumlah }}</td>
                <td>Rp {{ number_format($item->Harga, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/tambah" class="btn btn-success btn-sm">Beli</a>
                    <a href="/hapus/{{ $item->ID }}"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin membatalkan item ini?')">
                        Batal
                    </a>
                </td>
            </tr>
            @endforeach

            @if(count((array)$keranjang) == 0)
            <tr>
                <td colspan="6" class="text-center text-muted">Belum ada data</td>
            </tr>
            @endif
        </tbody>
    </table>

</body>
</html>
