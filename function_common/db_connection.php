<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "studyphp";

    $connect = mysqli_connect($servername, $username, $password, $dbname);

    if (!$connect) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
    }

?>