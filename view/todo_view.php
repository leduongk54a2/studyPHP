<?php
include('./components/header.php');
include('../function_common/check_login.php');
checkLogin();
?>

<div>
    <div class="flex flex-end padding-20" >
        <a class="margin-right-15 text-red" href="../controller/logout_handler.php">Logout</a>
        <a class="margin-right-15 text-red" href="./change_password_view.php">Change password</a>
        <a class="margin-right-15 text-red">Delete account</a>
    </div>
    <div class="flex item-center width-100">
        <div class="flex item-center font-size-20 bg-gray width-100">Hello <?php echo $_SESSION["username"];?></div>
    </div>
</div>
<?php include('./components/footer.php'); ?>