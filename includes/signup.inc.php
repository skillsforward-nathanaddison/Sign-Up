<?php

if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $emailAdd = $_POST["emailAdd"];
    $userId = $_POST["userId"];
    $pwd = $_POST["password"];
    $rePwd = $_POST["rePassword"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($username, $emailAdd, $userId, $pwd, $rePwd) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($emailAdd) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $rePwd) !== false) {
        header("location: ../signup.php?error=pwdmatcherror");
        exit();
    }
    if (uidExists($conn, $username, $emailAdd) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $username, $emailAdd, $pwd);
    }
    else {
        header("location: ../signup.php");
        exit();
    }




    var_dump($_POST[]);


    else {
    header("location: ../signup.php");
}