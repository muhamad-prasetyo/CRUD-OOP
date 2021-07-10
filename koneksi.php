<?php 


class Connection {
    public function get_connection() 
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "mahasiswa";

        $connect = new mysqli($host, $username, $password, $database);

        return $connect;
    }
}