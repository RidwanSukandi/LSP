<?php
include("siswa.php");
$data = new siswa;
$dataEdit = $data->getByID($_GET['id']);
$result = $dataEdit->fetch_assoc();
?>

<html>

<body>
    <h1>Edit Siswa</h1>
    <form method="post" action="#">
        <table>
            <tr hidden>
                <td>id</td>
                <td>:</td>
                <td><input name="id" value="<?php echo $result['id'] ?>" disabled></td>
            </tr>
            <tr>
                <td>Nis </td>
                <td>:</td>
                <td><input name="Nis" value="<?php echo $result['Nis'] ?>"></td>
            </tr>
            <tr>
                <td>Nama Siswa </td>
                <td>:</td>
                <td><input name="Nama_siswa" type="text" value="<?php echo $result['Nama_siswa'] ?>"></td>
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
                <td>Telpon </td>
                <td>:</td>
                <td><input name="Telpon" type="text" value="<?php echo $result['Telpon'] ?>"></td>
            </tr>
            <tr>
                <td>Nama Wali </td>
                <td>:</td>
                <td><input name="Nama_wali" type="text" value="<?php echo $result['Nama_wali'] ?>"></td>
            </tr>
            <tr>
                <td>Kode_Kelas</td>
                <td>:</td>
                <td><input name="Kode_kelas" type="text" value="<?php echo $result['Kode_kelas'] ?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input name="Username" type="text" value="<?php echo $result['Username'] ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input name="Password" type="text" value="<?php echo $result['Password'] ?>"></td>
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