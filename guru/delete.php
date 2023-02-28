<?php

session_start();

if ($_SESSION['status'] != "login") {
    header("Location:http://localhost/latihan/test/login.php");
}


include("siswa.php");
$data = new siswa;
$data->delete($_GET['id']);
header('location:index.php');
