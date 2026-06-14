<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Nilai Kuliah</title>
</head>
<body>
    <h2>Tambah Data Nilai Kuliah</h2>

    <form action="/nilaikuliah/store" method="post">
        @csrf

        <p>
            <label>NRP:</label><br>
            <input type="text" name="nrp" required="required" maxlength="6">
        </p>
        <p>
            <label>Nilai Angka:</label><br>
            <input type="number" name="nilai_angka" required="required">
        </p>
        <p>
            <label>SKS:</label><br>
            <input type="number" name="sks" required="required">
        </p>

        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>
