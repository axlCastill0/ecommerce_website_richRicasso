<?php

class EditUser extends Dbh
{

    protected function updateUser($user_id, $email, $firstname, $lastname)
    {
        $stmt = $this->connect()->prepare('UPDATE users SET user_email = ?, user_firstname = ?, user_lastname = ? WHERE user_id = ?;');

        if (!$stmt->execute(array($email, $firstname, $lastname, $user_id))) {
            $stmt = null;
            header("location: /PHP/Projet02/pages/account.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function updateUserNewsletter($subscribed, $email)
    {
        if ($subscribed == 1) {
            if ($this->checkNewsletter($email)) {
                $stmt = $this->connect()->prepare('INSERT INTO newsletter (email) VALUES (?);');
                if (!$stmt->execute(array($email))) {
                    $stmt = null;
                    header('location: /PHP/Projet02/pages/account.php?error=stmtfailed');
                    exit();
                }
            }
        }
        if ($subscribed == 0) {
            if (!$this->checkNewsletter($email)) {
                $stmt = $this->connect()->prepare('DELETE FROM newsletter WHERE email = ?;');
                if (!$stmt->execute(array($email))) {
                    $stmt = null;
                    header('location: /PHP/Projet02/pages/account.php?error=stmtfailed');
                    exit();
                }
            }
        }
    }

    protected function checkNewsletter($email)
    {
        $result = true;
        $stmt = $this->connect()->prepare("SELECT id FROM newsletter WHERE email = ?;");
        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: /PHP/Projet02/pages/account.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() > 0) {
            $result = false;
            $stmt = null;
        }
        return $result;
    }
}