<?php
require_once "../conection.php";
class guru
{

    public $conn;

    function __construct()
    {
        $conection = new Conection;
        $this->conn = $conection->conn;
    }

    function add_data($data)
    {
        $Nip = $data["Nip"];
        $Nama_guru = $data["Nama_guru"];
        $Tempat_lahir = $data["Tempat_lahir"];
        $Tanggal_lahir = $data["Tanggal_lahir"];
        $Jenis_kelamin = $data["Jenis_kelamin"];
        $Alamat = $data["Alamat"];
        $Telpon = $data["Telpon"];
        $Kode_mata_pelajaran = $data["Kode_mata_pelajaran"];
        $Nama_mata_pelajaran = $data["Nama_mata_pelajaran"];

        $this->conn->query("INSERT INTO guru(Nip,Nama_guru,Tempat_lahir,Tanggal_lahir,Jenis_kelamin,Alamat,Telpon,Kode_mata_pelajaran,Nama_mata_pelajaran)VALUES('$Nip','$Nama_guru','$Tempat_lahir','$Tanggal_lahir','$Jenis_kelamin','$Alamat','$Telpon','$Kode_mata_pelajaran','$Nama_mata_pelajaran')");

        return true;
    }

    function getGuru()
    {
        $data = $this->conn->query("SELECT * FROM guru");
        return $data;
    }

    function getByID($id)
    {
        $data = $this->conn->query("SELECT * FROM guru WHERE id='$id'");
        return $data;
    }

    function delete($id)
    {
        $this->conn->query("DELETE FROM guru WHERE id='$id'");
        return true;
    }

    function update($id, $data)
    {
        $Nip = $data["Nip"];
        $Nama_guru = $data["Nama_guru"];
        $Tempat_lahir = $data["Tempat_lahir"];
        $Tanggal_lahir = $data["Tanggal_lahir"];
        $Jenis_kelamin = $data["Jenis_kelamin"];
        $Alamat = $data["Alamat"];
        $Telpon = $data["Telpon"];
        $Kode_mata_pelajaran = $data["Kode_mata_pelajaran"];
        $Nama_mata_pelajaran = $data["Nama_mata_pelajaran"];

        $this->conn->query("UPDATE guru SET Nip='$Nip', Nama_guru='$Nama_guru',Tempat_lahir = '$Tempat_lahir', Tanggal_lahir='$Tanggal_lahir', Jenis_kelamin='$Jenis_kelamin',Alamat='$Alamat',Telpon='$Telpon',Kode_mata_pelajaran = '$Kode_mata_pelajaran', Nama_mata_pelajaran='$Nama_mata_pelajaran' WHERE id='$id'");
        return true;
    }
}
