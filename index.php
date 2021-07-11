<?php 
include 'model.php';

// inisialisasi object model 
$model = new Model();

// untuk mendefinisikan pembuatan nomor urut otomatis pada table 
$index = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa </title>
</head>
<body>
    <div class="container">
        <h1>Data Nilai Mahasiswa</h1>
        <a href="create.php">Tambah Data</a>
    <br><br>

    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>NA</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // menyimpan isi data dari method tampil_Data ke dalam variable result 
            $result = $model->tampil_data();
            
            // cek jika data tidak kosong 
            if(!empty($result)) {

                // jika ada data, maka tampilkan kedalam variabel $data 
                foreach($result as $data) : ?>
                <tr>
                    <td><?= $index++ ?></td>
                    <td><?= $data->nim ?></td>
                    <td><?= $data->nama ?></td>
                    <td><?= $data->uts ?></td>
                    <td><?= $data->uas ?></td>
                    <td><?= $data->tugas ?></td>
                    <td><?= $data->na ?></td>
                    <td><?= $data->status ?></td>
                    <td>
                        <a name="edit" id="edit" href="edit.php?nim=<?=$data->nim ?>">Edit</a>
                        <a name="hapus" id="hapus" href="proses.php?nim<?=$data->nim ?>">Hapus</a>
                    </td>
                </tr>
                <?php endforeach;
            } else { ?>
                <tr>
                    <td colspan="9">Belum ada data pada tabel nilai mahasiswa.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</body>
</html>