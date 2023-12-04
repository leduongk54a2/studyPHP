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
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    $captcha = $_POST["captcha"];
    if ($captcha !== $_SESSION["captcha"]) {
        die("Captcha không đúng.");
    }
    $checkQuery = "SELECT * FROM Users WHERE username = '$username'";
    $checkResult = mysqli_query($connect, $checkQuery);
    if (mysqli_num_rows($checkResult) > 0) {
        die("Username đã tồn tại. Chọn username khác.");
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $insertQuery = "INSERT INTO Users (username, password) VALUES ('$username', '$hashedPassword')";

    if (mysqli_query($connect, $insertQuery)) {
        $_SESSION["username"] = $username;
        header("Location: ../view/todo_view.php");
        exit();
    } else {
        echo "Lỗi: " . $insertQuery . "<br>" . mysqli_error($connect);
    }
}

mysqli_close($connect);
?>