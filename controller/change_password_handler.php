<?php
session_start();

require_once("../function_common/db_connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $oldPassword = $_POST["old_password"];
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];
    $_SESSION["errorMessage"] = "";

    $regexPassWord= "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";

    $username = $_SESSION["username"];
    $checkQuery = "SELECT * FROM Users WHERE username = '$username'";
    $checkResult = mysqli_query($connect, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        $user = mysqli_fetch_assoc($checkResult);
        if (!password_verify($oldPassword, $user["password"])) {

            $_SESSION["errorMessage"] .= "Mat khau cu khong dung" ."<br/>";
        }
    }

    if(!preg_match($regexPassWord, $newPassword)) {
        $_SESSION["errorMessage"] .= "password mới yêu cầu ít nhất 8 ký tự, bao gồm chữ cái, số và ít nhất một ký tự đặc biệt." ."<br/>";
    }

    if(strcmp($newPassword, $confirmPassword) !== 0) {
        $_SESSION["errorMessage"] .= "Confirm Password khong dung" ."<br/>";
    }

    if(strlen($_SESSION["errorMessage"]) > 0 ) {
        header("Location: ../view/change_password_view.php");
        exit();
    } else {
        $user = mysqli_fetch_assoc($checkResult);
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $updateQuery = "UPDATE users SET password = '$hashedPassword' WHERE username = '$username'";

        if (mysqli_query($connect, $updateQuery)) {
            header("Location: ../view/todo_view.php");
            exit();
        } else {
            echo "Lỗi: " . $updateQuery . "<br>" . mysqli_error($connect);
        }
    }

}

mysqli_close($connect);
?>