<?php

session_start();

if ($_SESSION['status'] != "login") {
    header("Location:http://localhost/latihan/test/login.php");
}


include "guru.php";
$guru = new guru;
if (isset($_POST['simpan'])) {
    $guru->add_data($_POST);
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Data Guru</h1>
    <form method="post" action="#">
        <table>
            <tr>
                <td>Nip </td>
                <td>:</td>
                <td><input name="Nip" type="text"></td>
            </tr>
            <tr>
                <td>Nama Guru </td>
                <td>:</td>
                <td><input name="Nama_guru" type="text"></td>
            </tr>
            <tr>
                <td>Tempat Lahir </td>
                <td>:</td>
                <td><input name="Tempat_lahir" type="text"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir </td>
                <td>:</td>
                <td><input name="Tanggal_lahir" type="date"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input name="Jenis_kelamin" type="text"></td>
            </tr>
            <tr>
                <td>Alamat </td>
                <td>:</td>
                <td><input name="Alamat" type="text"></td>
            </tr>
            <tr>
                <td>Telpon </td>
                <td>:</td>
                <td><input name="Telpon" type="text"></td>
            </tr>
            <tr>
                <td>Kode Mata Pelajaran </td>
                <td>:</td>
                <td><input name="Kode_mata_pelajaran" type="text"></td>
            </tr>
            <tr>
                <td>Nama Mata Pelajaran</td>
                <td>:</td>
                <td><input name="Nama_mata_pelajaran" type="text"></td>
            </tr>
            <tr>
                <td> </td>
                <td></td>
                <td><button type="submit" name="simpan">simpan</button></td>
            </tr>
        </table>
    </form>
</body>

</html>