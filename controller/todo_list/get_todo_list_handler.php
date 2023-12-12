<?php
    require_once("../function_common/db_connection.php");

    $getTaskOpen = "SELECT id,task_name FROM tasks WHERE status = 0";
    $resultTaskOpen = $connect->query($getTaskOpen);
    $getTaskDone = "SELECT id,task_name FROM tasks WHERE status = 1";
    $resultTaskDone = $connect->query($getTaskDone);

    $taskOpens = [];
    $taskDones = [];
    if ($resultTaskOpen->num_rows > 0) {
        while ($row = $resultTaskOpen->fetch_assoc()) {
            $taskOpens[] = $row;
        }
    }
    if ($resultTaskDone->num_rows > 0) {
        while ($row = $resultTaskDone->fetch_assoc()) {
            $taskDones[] = $row;
        }
    }

    $connect->close();

?>
