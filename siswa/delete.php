<?php
include("siswa.php");
$data = new siswa;
$data->delete($_GET['id']);
header('location:index.php');
