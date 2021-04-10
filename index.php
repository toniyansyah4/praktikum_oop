<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : "";

$nama =  (isset($_POST['nama'])) ? $_POST['nama'] : NULL;
$berat_badan =   (isset($_POST['berat_badan'])) ? $_POST['berat_badan'] : NULL;
$tinggi_badan = (isset($_POST['tinggi_badan'])) ? $_POST['tinggi_badan'] : NULL;
$umur = (isset($_POST['umur'])) ? $_POST['umur'] : NULL;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .menu {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #EFF5FB;
            color: #0091AD;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php

    switch ($page) {
        case 'output':
            include "output.php";
            break;
        case '':
            require_once 'libfungsi.php';
            include "form.php";
            break;
    }
    ?>
    <div class="menu">
        <h3>@toniyansyah4</h3>
    </div>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>