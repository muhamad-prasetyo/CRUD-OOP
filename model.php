<?php 

include 'koneksi.php';

class Model extends Connection {

    // method __construct untuk memanggil method get_connection yang didefiniskan dalam variabel $this->conn 
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    // method insert untuk menginput data ke dalam database melalui object $this->conn
    public function insert($nim, $nama, $uts, $uas, $tugas)
    {
        $na = $this->na($uts,$tugas,$uas);
        $status = $this->status($na);
        $sql = "INSERT INTO tbl_nilai (nim, nama, uts, uas, tugas, na, status) VALUES ('$nim', '$nama', '$uts', '$uas', '$tugas', '$na', '$status')";

        $this->conn->query($sql);
    }

    // method na untuk menghitung nilai akhir berdasarkan rumus yg dibuat 
    public function na($uts,$tugas,$uas) 
    {
        $na =(0.3*$uts)+(0.3*$tugas)+(0.4*$uas);
        
        return $na;
    }

    // Method status untuk membuat string value berdasarkan nilai akhir
    public function status($na) 
    {
        $status="";

        if($na >= 60 && $na <=100) {
            $status="LULUS";
        } else {
            $status="TIDAK LULUS";
        }

        return $status;
    }
}