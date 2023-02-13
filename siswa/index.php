<?php
require "./siswa.php";
$siswa = new siswa;
$fetch = $siswa->getSiswa();
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
    <h1 style="text-align: center;">Data Siswa</h1>
    <button><a style="text-decoration: none;" href="http://localhost/latihan/test/siswa/tambah.php">Tambah Siswa</a></button>
    <Table>
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama Siswa</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Telpon</th>
            <th>Nama Wali</th>
            <th>Kode kelas</th>
            <th>Username</th>
            <th>Action</th>
        </tr>
        <?php $no = 0;

        while ($data = $fetch->fetch_assoc()) :
            $no++;
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['Nis']; ?></td>
                <td><?= $data["Nama_siswa"]; ?></td>
                <td><?= $data["Tempat_lahir"]; ?></td>
                <td><?= $data["Tanggal_lahir"]; ?></td>
                <td><?= $data["Jenis_kelamin"]; ?></td>
                <td><?= $data["Telpon"]; ?></td>
                <td><?= $data["Nama_wali"]; ?></td>
                <td><?= $data["Kode_kelas"]; ?></td>
                <td><?= $data["Username"]; ?></td>
                <td><a href="http://localhost/latihan/test/siswa/edit.php?id=<?= $data['id']; ?>">Edit</a> | <a href="http://localhost/latihan/test/siswa/delete.php?id=<?= $data['id']; ?>">Delete</a> </td>

            </tr>
        <?php endwhile ?>
    </Table>
</body>

</html>