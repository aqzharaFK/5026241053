<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2 class="mb-4">Form Beli Barang</h2>

    <form action="/store" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Kode Barang</label>
            <input type="text" name="KodeBarang" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah Pembelian</label>
            <input type="text" name="Jumlah" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga per Item</label>
            <input type="text" name="Harga" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/" class="btn btn-secondary">Kembali</a>
    </form>

</body>
</html>
