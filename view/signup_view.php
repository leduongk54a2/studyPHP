<?php
function generateCaptcha($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $captcha = '';
    $charactersLength = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        $captcha .= $characters[rand(0, $charactersLength - 1)];
    }

    return $captcha;
}
?>


<?php include('./components/header.php'); ?>
<div class="login-btn-wrapper">
    <span>Already have an account</span>
    <a class="login-btn" href="./signin_view.php" >Login</a>
</div>
<form action="../controller/signup_handler.php" method="post">
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
            <label class="col-40" for="confirm_password">Confirm Password:</label>
            <input class="col-60" type="password" id="confirm_password" name="confirm_password" required>
        </div>

        <div class="row-wrapper">
            <label for="captcha"></label>
            <div class="col-40 captcha-text"><?php $captcha = generateCaptcha(); echo $captcha; $_SESSION["captcha"] = $captcha; ?></div>
            <input class="col-60" type="text" id="captcha" name="captcha" required>
        </div>

        <div>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>

    </div>
</form>

<?php include('./components/footer.php'); ?>
