<?php
include "siswa.php";
$siswa = new siswa;
if (isset($_POST['simpan'])) {
    $siswa->add_data($_POST);
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
    <h1>Tambah Data Siswa</h1>
    <form method="post" action="#">
        <table>
            <tr>
                <td>Nis </td>
                <td>:</td>
                <td><input name="Nis" type="text"></td>
            </tr>
            <tr>
                <td>Nama Siswa </td>
                <td>:</td>
                <td><input name="Nama_siswa" type="text"></td>
            </tr>
            <tr>
                <td>Tempat Lahir </td>
                <td>:</td>
                <td><input name="Tempat_lahir" type="text"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir </td>
                <td>:</td>
                <td><input name="Tanggal_lahir" type="text"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input name="Jenis_kelamin" type="text"></td>
            </tr>
            <tr>
                <td>Telpon </td>
                <td>:</td>
                <td><input name="Telpon" type="text"></td>
            </tr>
            <tr>
                <td>Nama Wali </td>
                <td>:</td>
                <td><input name="Nama_wali" type="text"></td>
            </tr>
            <tr>
                <td>Kode_Kelas</td>
                <td>:</td>
                <td><input name="Kode_kelas" type="text"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input name="Username" type="text"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input name="Password" type="text"></td>
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