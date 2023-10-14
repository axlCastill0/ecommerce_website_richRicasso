<?php

class EditUserController extends EditUser {
    private $user_id;
    private $email;
    private $firstname;
    private $lastname;
    private $newsletter;

    public function __construct($user_id, $email, $firstname, $lastname, $newsletter) {
        $this->user_id = $user_id;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->newsletter = $newsletter;
    }

    public function editUser() {
        if($this->emptyInput() == false) {
            header("location: /PHP/Projet02/pages/account.php?error=emptyinput");
            exit();
        }
        if($this->invalidEmail() == false) {
            header("location: /PHP/Projet02/pages/account.php?error=invalidemail");
            exit();
        }

        session_start();
        $_SESSION['user_email'] = $this->email;
        $_SESSION['user_firstname'] = $this->firstname;
        $_SESSION['user_lastname'] = $this->lastname;
        $_SESSION['user_newsletter'] = $this->newsletter;

        $this->updateUser($this->user_id, $this->email, $this->firstname, $this->lastname, $this->newsletter);
    }

    private function emptyInput() {
        $result = true;
        if(empty($this->email)) {
            $result = false;
        }
        return $result;
    }

    private function invalidEmail() {
        $result = true;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        return $result;
    }
}