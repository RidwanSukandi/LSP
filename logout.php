<?php
session_start();
session_destroy();
header("Location:http://localhost/latihan/test/login.php");
