<?php 

// untuk menampung data nim yang didapat atau dipilih
$id = $_GET['nim'];

include 'model.php';
$model = new Model();

// variabel $data untuk menampung data yang didapat dari method edit pada class model 
$data = $model->edit($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nilai Mahasiswa</title>
</head>
<body>
    <h1>Edit Nilai Mahasiswa</h1>
    <a href="index.php">Kembali</a>
    <br><br>

    <!-- mengirimkan data ke proses.php  -->
    <!-- Kemudian data objek yang berada dalam $data ditampilkan menjadi value dalam textfield berdasarkan data nim yang didapatkan dari method GET  -->
    <form action="proses.php" method="POST">
        <label for="nim">NIM</label>
        <br>
        <input type="text" name="nim" value="<?= $data->nim ?>">

        <br>
        <label for="nama">Nama</label>
        <br>
        <input type="text" name="nama" value="<?= $data->nama ?>">

        <br>
        <label for="uts">UTS</label>
        <br>
        <input type="text" name="uts" value="<?= $data->uts ?>">

        <br>
        <label for="tugas">Tugas</label>
        <br>
        <input type="text" name="tugas" value="<?= $data->tugas ?>">

        <br>
        <label for="uas">UAS</label>
        <br>
        <input type="text" name="uas" value="<?= $data->uas ?>">

        <br><br>
        <button type="submit" name="submit_edit">Submit</button>
    </form>
</body>
</html>