<?php
    include('../function_common/generate_captcha.php') ;
    include('../function_common/check_login.php');
    checkLogin();
?>
<?php include('./components/header.php'); ?>
    <div class="login-btn-wrapper">
        <a class="login-btn" href="./todo_view.php" >Todos</a>
    </div>
    <div class="flex item-center width-100 margin-bottom-30">
        <div class="flex item-center font-size-20 bg-gray width-100">Hello <?php echo $_SESSION["username"];?></div>
    </div>
    <form class="form-root" action="../controller/change_password_handler.php" method="post">
        <div class="title">Change Password</div>
        <div class="form-wrapper">
            <div class="row-wrapper">
                <label class="col-40" for="old_password">Old Password:</label>
                <input class="col-60" type="password" id="old_password" name="old_password" required>
            </div>
            <div class="row-wrapper">
                <label class="col-40" for="new_password">New Password:</label>
                <input class="col-60" type="password" id="new_password" name="new_password" required>
            </div>
            <div class="row-wrapper">
                <label class="col-40" for="confirm_password">Confirm Password:</label>
                <input class="col-60" type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="text-red">
                <?php
                if(isset($_SESSION["errorMessage"]) && strlen($_SESSION["errorMessage"])) {
                    echo $_SESSION["errorMessage"];
                }
                $_SESSION["errorMessage"] = "";
                ?>
            </div>

            <div class="btn-wrapper">
                <button class="btn" type="submit">Change</button>
                <button class="btn" type="reset">Reset</button>
            </div>

        </div>
    </form>
<?php include('./components/footer.php'); ?>