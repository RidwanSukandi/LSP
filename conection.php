<?php

class Conection
{
    public $conn;

    function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "lsp");
    }

    function validasi_login($username, $password)
    {
        $data =  $this->conn->query("SELECT * FROM siswa WHERE Username = '$username' AND Password = '$password'");
        return $data;
    }
}
