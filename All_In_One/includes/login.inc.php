<?php
if (isset($_POST['login_button'])) {
    $username = $_POST['log'];
    $password = $_POST['pwd'];

    require 'db.inc.php';
    require 'functions.inc.php';

    if (emptyInputsignin($username, $password) == true) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    loginUser($connect, $username, $password);
} else {
    header("location: ../login.php");
    exit();
}
