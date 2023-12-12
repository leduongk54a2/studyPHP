<?php
    session_start();
    require_once("../../function_common/db_connection.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $taskName = $_POST["taskName"];
        $username = $_SESSION["username"];
        $getUserQuery = "SELECT id FROM Users WHERE username = '$username'";
        $getUserResult = mysqli_query($connect, $getUserQuery);
        $user = mysqli_fetch_assoc($getUserResult);
        $userId =  $user["id"];
        $insertQuery = "INSERT INTO Tasks (user_id,task_name, status) VALUES ('$userId','$taskName' ,'0')";

        if (mysqli_query($connect, $insertQuery)) {
                header("Location: ../../view/todo_view.php");
                exit();
        } else {
                echo "Lỗi: " . $insertQuery . "<br>" . mysqli_error($connect);
        }
    }
?>