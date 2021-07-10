<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Nilai </title>
</head>
<body>
    <h1>Tambah</h1>
    <a href="index.php">Kembali</a>
    <br><br>
    <form action="proses.php" method="POST">
        <label for="nik">NIM</label>
        <br>
        <input type="text" name="nim">

        <br>

        <label for="nama">Nama</label>
        <br>
        <input type="text" name="nama">

        <br>

        <label for="uts">UTS</label>
        <br>
        <input type="number" name="uts">

        <br>

        <label for="uas">UAS</label>
        <br>
        <input type="number" name="uas">

        <br>

        <label for="tugas">Tugas</label>
        <br>
        <input type="number" name="tugas">
        <br><br>

        <button type="submit" name="submit_simpan">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>