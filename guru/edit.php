<?php

session_start();

if ($_SESSION['status'] != "login") {
    header("Location:http://localhost/latihan/test/login.php");
}


include("guru.php");
$data = new guru;
$dataEdit = $data->getByID($_GET['id']);
$result = $dataEdit->fetch_assoc();
?>

<html>

<body>
    <h1>Edit Data Guru</h1>
    <form method="post" action="#">
        <table>
            <tr hidden>
                <td>id</td>
                <td>:</td>
                <td><input name="id" value="<?php echo $result['id'] ?>" disabled></td>
            </tr>
            <tr>
                <td>Nip </td>
                <td>:</td>
                <td><input name="Nip" value="<?php echo $result['Nip'] ?>"></td>
            </tr>
            <tr>
                <td>Nama Guru </td>
                <td>:</td>
                <td><input name="Nama_guru" type="text" value="<?php echo $result['Nama_guru'] ?>"></td>
            </tr>
            <tr>
                <td>Tempat Lahir </td>
                <td>:</td>
                <td><input name="Tempat_lahir" type="text" value="<?php echo $result['Tempat_lahir'] ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir </td>
                <td>:</td>
                <td><input name="Tanggal_lahir" type="text" value="<?php echo $result['Tanggal_lahir'] ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input name="Jenis_kelamin" type="text" value="<?php echo $result['Jenis_kelamin'] ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input name="Alamat" type="text" value="<?php echo $result['Alamat'] ?>"></td>
            </tr>
            <tr>
                <td>Telpon </td>
                <td>:</td>
                <td><input name="Telpon" type="text" value="<?php echo $result['Telpon'] ?>"></td>
            </tr>
            <tr>
                <td>Kode Mata Pelajaran </td>
                <td>:</td>
                <td><input name="Kode_mata_pelajaran" type="text" value="<?php echo $result['Kode_mata_pelajaran'] ?>"></td>
            </tr>
            <tr>
                <td>Nama Mata Pelajaran</td>
                <td>:</td>
                <td><input name="Nama_mata_pelajaran" type="text" value="<?php echo $result['Nama_mata_pelajaran'] ?>"></td>
            </tr>
            <tr>
                <td> </td>
                <td></td>
                <td><button type="submit" name="simpan">simpan</button></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['simpan'])) {

        $data->update($result['id'], $_POST);
        header("location:index.php");
    }
    ?>

</body>

</html>