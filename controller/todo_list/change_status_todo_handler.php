<?php
require_once("../../function_common/db_connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskId = $_POST["taskId"];
    $status = $_POST["status"];
    $updateQuery = "UPDATE Tasks SET status = '$status' WHERE id = '$taskId'";

    if (mysqli_query($connect, $updateQuery)) {
        header("Location: ../../view/todo_view.php");
        exit();
    } else {
        echo "Lỗi: " . $updateQuery . "<br>" . mysqli_error($connect);
    }
}
?>