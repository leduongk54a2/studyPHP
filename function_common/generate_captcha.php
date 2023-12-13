<?php
function generateCaptcha($length = 6) {
    $numbers = '0123456789';
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $captcha = '';
    $charactersLength = strlen($characters);
    $numbersLength = strlen($numbers);
    for ($i = 0; $i < $length; $i++) {
        if($i%2 == 0) {
            $captcha .= $numbers[rand(0, $numbersLength - 1)];
        } else {
            $captcha .= $characters[rand(0, $charactersLength - 1)];
        }
    }

    return $captcha;
}
?>