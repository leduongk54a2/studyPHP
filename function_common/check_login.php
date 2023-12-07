<?php
    function checkLogin() {
        session_start();
        if (!isset($_SESSION["username"])) {
            header("Location: ../view/signup_view.php");
            exit();
        }
    }
?>