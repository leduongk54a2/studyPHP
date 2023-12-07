<?php include('../function_common/generate_captcha.php') ?>
<?php include('./components/header.php'); ?>
    <div class="login-btn-wrapper">
        <span>Don't have an account</span>
        <a class="login-btn" href="./signup_view.php" >Login</a>
    </div>
    <form class="form-root" action="../controller/signin_handler.php" method="post">
        <div class="title">Sign In</div>
        <div class="form-wrapper">
            <div class="row-wrapper">
                <label class="col-40" for="username">User Name:</label>
                <input class="col-60" type="text" id="username" name="username" required>
            </div>

            <div class="row-wrapper">
                <label class="col-40" for="password">Password:</label>
                <input class="col-60" type="password" id="password" name="password" required>
            </div>

            <div class="row-wrapper">
                <label for="captcha"></label>
                <div class="col-40 text-red"><?php  session_start(); $captcha = generateCaptcha(); echo $captcha; $_SESSION["captcha"] = $captcha;?></div>
                <input class="col-60" type="text" id="captcha" name="captcha" required>
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
                <button class="btn" type="submit">Submit</button>
                <button class="btn" type="reset">Reset</button>
            </div>

        </div>
    </form>
<?php include('./components/footer.php'); ?>