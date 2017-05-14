<?php
    include "../services/error.php";
    include "../services/Utils.php";
    $utils = new Utils();
    $pwd = "ajsndkjasfnsakj";
    $hash = $utils->encrptPassword($pwd);
    if (password_verify($pwd, $hash)) {
        echo 'Password is valid!';
    } else {
        echo 'Invalid password.';
    }
//    echo phpinfo();
?>