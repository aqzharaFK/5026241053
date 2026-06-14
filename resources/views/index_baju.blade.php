<!DOCTYPE html>
<html lang="id">

<head>
    <title>5026241053 Muhammad Aqzhara Fathyan Khairi - Inventaris Baju</title>
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
            <h6>Tugas Pra EAS - Baju</h6>
        </div>

        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/pegawai">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/baju">baju</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/keranjang">Keranjang Belanja</a>
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
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    <h3>Daftar Inventaris Baju</h3>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>Kode Baju</th>
                                <th>Merk Baju</th>
                                <th>Stock Baju</th>
                                <th>Tersedia</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($baju as $b)
                            <tr>
                                <td class="text-center">{{ $b->kodebaju }}</td>
                                <td>{{ $b->merkbaju }}</td>
                                <td class="text-center">{{ $b->stockbaju }}</td>
                                <td class="text-center">
                                    @if($b->tersedia == 'Y')
                                        <span class="badge bg-success">Ya</span>
                                    @else
                                        <span class="badge bg-danger">Tidak</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
