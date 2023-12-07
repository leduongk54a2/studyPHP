<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studyphp";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($connect, $_POST["username"]);
    $passwordUse = $_POST["password"];
    $captcha = $_POST["captcha"];
    $_SESSION["errorMessage"] = "";


    echo $_POST["password"];

    if ($captcha !==  $_SESSION["captcha"]) {
        $_SESSION["errorMessage"] .= "Captcha không đúng." ."<br/>";
    }
    $checkQuery = "SELECT * FROM Users WHERE username = '$username'";
    $checkResult = mysqli_query($connect, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        $user = mysqli_fetch_assoc($checkResult);
        if (password_verify($passwordUse, $user["password"])) {
            $_SESSION["username"] = $username;
            header("Location: ../view/todo_view.php");
            exit();
        } else {
            $_SESSION["errorMessage"] .= "Mat khau khong dung" ."<br/>";
        }
    } else {
        $_SESSION["errorMessage"] .= "Username khong tồn tại" ."<br/>";
    }

    if(strlen($_SESSION["errorMessage"]) > 0 ) {
        header("Location: ../view/signin_view.php");
        exit();
    }
}

mysqli_close($connect);
?>