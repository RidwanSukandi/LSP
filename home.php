<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Selamat Datang <?php echo $_SESSION["Username"] ?></h1>
    <button><a style="text-decoration: none;" href="http://localhost/latihan/test/siswa">Data Siswa</a></button>
    <button><a style="text-decoration: none;" href="http://localhost/latihan/test/guru.php">Data Guru</a>
    </button>
</body>

</html>