<?php
    include('../function_common/generate_captcha.php');
    include ('../function_common/check_login.php');
    session_start();
    session_unset();
    session_destroy();
    checkLogin();
?>
