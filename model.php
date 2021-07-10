<?php 

include 'koneksi.php';

class Model extends Connection {

    // method __construct untuk memanggil method get_connection yang didefiniskan dalam variabel $this->conn 
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }
}