<?php

class EditUser extends Dbh
{

    protected function updateUser($user_id, $email, $firstname, $lastname, $newsletter)
    {
        $stmt = $this->connect()->prepare('UPDATE users SET user_email = ?, user_firstname = ?, user_lastname = ?, user_newsletter = ? WHERE user_id = ?;');

        if (!$stmt->execute(array($email, $firstname, $lastname, $newsletter, $user_id))) {
            $stmt = null;
            header("location: /PHP/Projet02/pages/account.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }
}