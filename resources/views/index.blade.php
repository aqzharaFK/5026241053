<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Keranjang Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

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
