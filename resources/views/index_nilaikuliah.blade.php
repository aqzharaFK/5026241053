<!DOCTYPE html>
<html lang="id">

<head>
    <title>5026241053 Muhammad Aqzhara Fathyan Khairi - Nilai Kuliah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="container">
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h3>5026241053 Muhammad Aqzhara Fathyan Khairi</h3>
            <h6>Latihan 2 - Nilai Kuliah</h6>
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
                        <a class="nav-link" href="/keranjang">Keranjang Belanja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/nilaikuliah">Nilai Kuliah</a>
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

        <section class="mt-4 mb-5">
            <div class="row">
                <div class="col-lg-12">

                    <div class="mb-4">
                        <h2>Data Nilai Kuliah</h2>
                        <p class="text-muted">Tabel rekapitulasi nilai mahasiswa berdasarkan SKS dan Nilai Angka.</p>
                    </div>

                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">

                            <a href="/nilaikuliah/tambah" class="btn btn-primary mb-3" style="background-color: #37517e; border-color: #37517e;">
                                <i class="bi bi-plus-circle"></i> Tambah Data
                            </a>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover text-center align-middle">
                                    <thead class="table-dark" style="--bs-table-bg: #37517e;">
                                        <tr>
                                            <th>ID</th>
                                            <th>NRP</th>
                                            <th>Nilai Angka</th>
                                            <th>SKS</th>
                                            <th>Nilai Huruf</th>
                                            <th>Bobot</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nilaikuliah as $n)
                                        <tr>
                                            <td>{{ $n->ID }}</td>
                                            <td>{{ $n->NRP }}</td>
                                            <td>{{ $n->NilaiAngka }}</td>
                                            <td>{{ $n->SKS }}</td>
                                            <td>
                                                @php
                                                    if ($n->NilaiAngka <= 40) {
                                                        echo '<span class="badge bg-danger">D</span>';
                                                    } elseif ($n->NilaiAngka >= 41 && $n->NilaiAngka <= 60) {
                                                        echo '<span class="badge bg-warning text-dark">C</span>';
                                                    } elseif ($n->NilaiAngka >= 61 && $n->NilaiAngka <= 80) {
                                                        echo '<span class="badge bg-primary">B</span>';
                                                    } elseif ($n->NilaiAngka >= 81) {
                                                        echo '<span class="badge bg-success">A</span>';
                                                    }
                                                @endphp
                                            </td>
                                            <td><strong>{{ $n->NilaiAngka * $n->SKS }}</strong></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

</body>

</html>
