<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "studyphp";

    $connect = mysqli_connect($servername, $username, $password, $dbname);
    if (!$connect) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
    }

    session_start();
    $username = $_SESSION["username"];
    $deleteQuery = "DELETE FROM users WHERE username = '$username'";
    if (mysqli_query($connect, $deleteQuery)) {
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../view/signup_view.php");
        exit();
    } else {
        echo "Lỗi: " . $deleteQuery . "<br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>