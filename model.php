<?php 

include 'koneksi.php';

class Model extends Connection {
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }
}