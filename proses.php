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

// cek apakah terdapat data/objeck masuk dari POST submit_edit 
if(isset($_POST['submit_edit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    
    $model = new Model();
    
    // kemudian variable diatas di parsing kedalam method update pada class model
    $model->update($nim,$nama,$uts,$uas,$tugas);
    
    header('Location:index.php');
}

// cek apakah terdapat data/objek dari GET nim dari index link hapus
if(isset($_GET['nim'])) {

    // jika true, maka data get ditampung di varibel $id
    $id = $_GET['nim'];

    // inisialisasi objek 
    $model = new Model();

    // setelah ditampung, kemudian diproses melalui method delete() dari objek model pada class model 
    $model->delete($id);

    header('Location:index.php');
}

// isset() adalah salah satu perintah php yang berfungsi untuk memeriksa sebuah objek dari form, apakah ada atau tidak nilai yang di lempar dari suatu form. Fungsi "isset() akan tetap bernilai true meskipun nilai dari suatu form tidak terisi atau kosong. Namun untuk nilai false atau sebaliknya bisa ditambahkan operator ! pada isset() tersebut, sehingga menjadi !isset()." 