<?php
require_once "./conection.php";
$conection = new Conection;
session_start();
if (isset($_POST["submit"])) {
    $data = $conection->validasi_login($_POST["Username"], $_POST["Password"]);
    if ($data->num_rows > 0) {
        $_SESSION['Username'] = $_POST['Username'];
        $_SESSION['status'] = "login";
        header("Location:http://localhost/latihan/test/home.php");
        exit;
    }

    $error = true;
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

<style>
    .container {
        border: 1px solid black;
        width: 300px;
        padding: 20px;
        margin: 10% auto;
    }
</style>

<body>
    <div class="container">
        <h3 style="text-align: center;">Form Login</h3>
        <form action="" method="post">
            <P><label for="">Username : </label><input type="text" name="Username"></P>
            <p> <label for="">Password :</label><input type="Password" name="Password"></p>
            <button name="submit">Submit</button>

            <?php if (isset($error)) : ?>
                <h4 style=" color:red;font-style: italic; ">username / password salah</h4>
            <?php endif; ?>
        </form>

    </div>
</body>

</html>