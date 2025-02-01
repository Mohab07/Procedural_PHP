<?php
function emptyInputsignup($name, $email, $username, $password, $repassword)
{

    if (empty($name) || empty($username) || empty($email) || empty($password) || empty($repassword)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username)
{

    if (preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = false;
    } else {
        $result = true;
    }
    return $result;
}
function invalidemail($email)
{

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function pwdMatch($pass, $rpass)
{

    if ($pass !== $rpass) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function uidExist($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        return false;
    }

    mysqli_stmt_close($stmt);
}

function createuser($conn, $name, $username, $email, $password)
{
    $sql = "INSERT INTO users (usersnName,usersEmail,usersUid,usersPwd) VALUES(?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    $hashedpass = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $username, $email, $hashedpass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}
function emptyInputsignin($user, $pass)
{
    if (empty($user) || empty($pass)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function loginUser($conn, $username, $password)
{
    $uidExist = uidExist($conn, $username, $username);
    if ($uidExist === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExist["usersPwd"];
    $checkPwd = password_verify($password, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExist["usersId"];
        $_SESSION["useruid"] = $uidExist["usersUid"];
        header("location: ../index.php");
        exit();
    }
}
