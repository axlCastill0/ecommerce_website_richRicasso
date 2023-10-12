<?php

class Users extends Dbh
{

    protected function setUser($uid, $email, $pwd)
    {
        $stmt = $this->connect()->prepare('INSERT INTO users (uid, user_email, user_pwd) VALUES (?, ?, ?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($uid, $email, $hashedPwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($uid, $email)
    {
        $stmt = $this->connect()->prepare('SELECT uid FROM users WHERE uid = ? OR user_email = ?;');
        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $resultCheck = true;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        return $resultCheck;
    }
}