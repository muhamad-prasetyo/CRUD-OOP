<?php

include "model.php";
    // cek apakah terdapat data/objek masuk dari post submit_simpan 
if (isset($_POST['submit_simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    $model = new Model();

    // seluruh variable di parsing kedalam method insert pada class model 
    $model->insert($nim, $nama, $uts, $uas, $tugas);

    // setelah selesai memasukan nilai kedalam mysql maka akan dialihkan ke index.php 
    header('Location:index.php');
}

// isset() adalah salah satu perintah php yang berfungsi untuk memeriksa sebuah objek dari form, apakah ada atau tidak nilai yang di lempar dari suatu form. Fungsi "isset() akan tetap bernilai true meskipun nilai dari suatu form tidak terisi atau kosong. Namun untuk nilai false atau sebaliknya bisa ditambahkan operator ! pada isset() tersebut, sehingga menjadi !isset()." 