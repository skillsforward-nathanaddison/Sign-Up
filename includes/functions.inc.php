<?php

function emptyInputSignup($username,$emailAdd, $userId, $pwd, $rePwd) {
    $result;
    if (empty($username) || empty($emailAdd) || empty($userId) || empty($pwd) || empty($rePwd)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }

    function invalidEmail($emailAdd) {
        $result
        if (!filter_var($emailAdd, FILTER_VALIDATE_EMAIL)) {
            $result = true;
    }
    else {
        $result = false;
    }

    function pwdMatch($pwd, $rePwd) {
    if ($pwd !== $rePwd) {
    $result = true;
    }
    else {
     $result =false;
    }

    function uidExists($conn, $username, $emailAdd) {
       $sql = "SELECT * FROM users WHERe usersUid = ? OR usersEmail = ?;";
       $stmt = mysqli_stmt_init($conn);
       if (!mysqli_stmt_prepare($stmt, $sql)) {
           header("location: ../signup.php?error=stmtfailed");
           exit();
       }
       mysqli_stmt_bind_param($stmt, "ss", $username, $emailAdd);
       mysqli_stmt_execute($stmt);

       $resultData = mysqli_stmt_get_result($stmt);

       if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
       }
       else {
           $result = false;
           return $result;
    }
       mysqli_stmt_close($stmt);

        function createUser($conn, $username, $emailAdd, $pwd) {
            $sql = "INSERT INTO USERS (userName, usersEmail, usersUid, usersPwd) VALUE (?, ?, ?, ?);";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../signup.php?error=stmtfailed");
                exit();
            }

            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT)

            mysqli_stmt_bind_param($stmt, "ssss", $emailAdd, $username, $hashedPwd);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("location: ../signup.php?error=none");
            exit();

}
}
}