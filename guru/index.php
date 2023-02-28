<?php

session_start();

if ($_SESSION['status'] != "login") {
    header("Location:http://localhost/latihan/test/login.php");
}


require "./guru.php";
$guru = new guru;
$fetch = $guru->getGuru();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            margin: auto;
            text-align: center;
        }

        button {
            margin-left: 215px;
            margin-bottom: 30px;
        }
    </style>

</head>

<body>
    <h1 style="text-align: center;">Data Guru</h1>
    <button><a style="text-decoration: none;" href="http://localhost/latihan/test/guru/tambah.php">Tambah Data Guru</a></button>
    <Table>
        <tr>
            <th>No</th>
            <th>Nip</th>
            <th>Nama Guru</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Telpon</th>
            <th>Kode Mata Pelajaran</th>
            <th>Nama Mata Pelajaran </th>
            <th>Action</th>
        </tr>
        <?php $no = 0;

        while ($data = $fetch->fetch_assoc()) :
            $no++;
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['Nip']; ?></td>
                <td><?= $data["Nama_guru"]; ?></td>
                <td><?= $data["Tempat_lahir"]; ?></td>
                <td><?= $data["Tanggal_lahir"]; ?></td>
                <td><?= $data["Jenis_kelamin"]; ?></td>
                <td><?= $data["Alamat"]; ?></td>
                <td><?= $data["Telpon"]; ?></td>
                <td><?= $data["Kode_mata_pelajaran"]; ?></td>
                <td><?= $data["Nama_mata_pelajaran"]; ?></td>
                <td><a href="http://localhost/latihan/test/guru/edit.php?id=<?= $data['id']; ?>">Edit</a> | <a href="http://localhost/latihan/test/guru/delete.php?id=<?= $data['id']; ?>">Delete</a> </td>

            </tr>
        <?php endwhile ?>
    </Table>
</body>

</html>