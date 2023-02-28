<?php
require_once "../conection.php";
class siswa
{

    public $conn;

    function __construct()
    {
        $conection = new Conection;
        $this->conn = $conection->conn;
    }

    function add_data($data)
    {
        $Nis = $data["Nis"];
        $Nama_siswa = $data["Nama_siswa"];
        $Tempat_lahir = $data["Tempat_lahir"];
        $Tanggal_lahir = $data["Tanggal_lahir"];
        $Jenis_kelamin = $data["Jenis_kelamin"];
        $Alamat = $data["Alamat"];
        $Telepon = $data["Telepon"];
        $Nama_wali = $data["Nama_wali"];
        $Kode_kelas = $data["Kode_kelas"];
        $Username = $data["Username"];
        $Password = md5($data["Password"]);

        $this->conn->query("INSERT INTO siswa(Nis,Nama_siswa,Tempat_lahir,Tanggal_lahir,Jenis_kelamin,Alamat,Telepon,Nama_wali,Kode_kelas,Username,Password) VALUES('$Nis','$Nama_siswa','$Tempat_lahir','$Tanggal_lahir','$Jenis_kelamin','$Alamat','$Telepon','$Nama_wali','$Kode_kelas','$Username','$Password')");
        return true;
    }

    function getSiswa()
    {
        $data = $this->conn->query("SELECT * FROM siswa");
        return $data;
    }

    function getByID($id)
    {
        $data = $this->conn->query("SELECT * FROM siswa WHERE id='$id'");
        return $data;
    }

    function delete($id)
    {
        $this->conn->query("DELETE FROM siswa WHERE id='$id'");
        return true;
    }

    function update($id, $data)
    {
        $Nis = $data["Nis"];
        $Nama_siswa = $data["Nama_siswa"];
        $Tempat_lahir = $data["Tempat_lahir"];
        $Tanggal_lahir = $data["Tanggal_lahir"];
        $Jenis_kelamin = $data["Jenis_kelamin"];
        $Alamat = $data["Alamat"];
        $Telepon = $data["Telepon"];
        $Nama_wali = $data["Nama_wali"];
        $Kode_kelas = $data["Kode_kelas"];
        $Username = $data["Username"];
        $Password = md5($data["Password"]);

        $this->conn->query("UPDATE siswa SET Nis='$Nis', Nama_siswa='$Nama_siswa',Tempat_lahir = '$Tempat_lahir', Tanggal_lahir='$Tanggal_lahir', Jenis_kelamin='$Jenis_kelamin',Alamat='$Alamat',Telepon='$Telepon',Nama_wali = '$Nama_wali', Kode_kelas='$Kode_kelas',Username = '$Username',Password='$Password' WHERE id='$id'");
        return true;
    }
}
