<?php
    require_once("../../function_common/db_connection.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $taskId = $_POST["taskId"];
        $deleteQuery = "DELETE FROM Tasks WHERE id = '$taskId'";

        if (mysqli_query($connect, $deleteQuery)) {
            header("Location: ../../view/todo_view.php");
            exit();
        } else {
            echo "Lỗi: " . $deleteQuery . "<br>" . mysqli_error($connect);
        }
    }
?>