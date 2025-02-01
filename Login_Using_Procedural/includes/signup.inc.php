<?php

if (isset($_POST['submit_button'])) {
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $username = $_POST['uid'];
    $password = $_POST['pwd'];
    $repassword = $_POST['pwdrepeat'];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputsignup($name, $email, $username, $password, $repassword) == true) {
        header("location: ..signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }

    if (invalidemail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($password, $repassword) !== false) {
        header("location: ..signup.php?error=passworddontmatch");
        exit();
    }
    if (uidExist($connect, $username, $email) !== false) {
        header("location: ..signup.php?error=usernametaken");
        exit();
    }
    createuser($connect, $name, $username, $email, $password);
} else {
    header("location: ../signup.php");
}
