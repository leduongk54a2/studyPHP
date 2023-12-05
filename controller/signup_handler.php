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
    $confirmPassword = $_POST["confirm_password"];
    $captcha = $_POST["captcha"];
    $_SESSION["errorMessage"] = "";

    $regexUserName = '/^[a-zA-Z0-9_]+$/';
    $regexPassWord= "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
    echo $_POST["password"];
    if(!preg_match($regexUserName, $username)) {
        $_SESSION["errorMessage"] .= "User Name cho phép chỉ sử dụng chữ cái, số và dấu gạch dưới." ."<br/>";
    }

    if(!preg_match($regexPassWord, $passwordUse)) {
        $_SESSION["errorMessage"] .=  "Password Yêu cầu ít nhất 8 ký tự, bao gồm chữ cái, số và ít nhất một ký tự đặc biệt." ."<br/>";
    }
    if(strcmp($passwordUse, $confirmPassword) !== 0) {
        $_SESSION["errorMessage"] .= "Confirm Password khong dung" ."<br/>";
    }

    if ($captcha !==  $_SESSION["captcha"]) {
        $_SESSION["errorMessage"] .= "Captcha không đúng." ."<br/>";
    }
    $checkQuery = "SELECT * FROM Users WHERE username = '$username'";
    $checkResult = mysqli_query($connect, $checkQuery);
    if (mysqli_num_rows($checkResult) > 0) {
        $_SESSION["errorMessage"] .= "Username đã tồn tại. Chọn username khác." ."<br/>";
    }

    if(strlen($_SESSION["errorMessage"]) > 0 ) {
        header("Location: ../view/signup_view.php");
        exit();
    } else {
        $hashedPassword = password_hash($passwordUse, PASSWORD_DEFAULT);
        $insertQuery = "INSERT INTO Users (username, password) VALUES ('$username', '$hashedPassword')";

        if (mysqli_query($connect, $insertQuery)) {
            $_SESSION["username"] = $username;
            header("Location: ../view/todo_view.php");
            exit();
        } else {
            echo "Lỗi: " . $insertQuery . "<br>" . mysqli_error($connect);
        }
    }

}

mysqli_close($connect);
?>