<?php

class UsersController extends Users {
    private $uid;
    private $email;
    private $pwd;

    public function __construct($uid, $email, $pwd) {
        $this->uid = $uid;
        $this->email = $email;
        $this->pwd = $pwd;
    }

    public function loginUser() {
        if($this->emptyInput() == false) {
            header("location: /PHP/Projet02/pages/login.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->uid, $this->pwd);
    }

    public function registerUser() {
        if($this->emptyInput() == false) {
            header("location: /PHP/Projet02/pages/register.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid() == false) {
            header("location: /PHP/Projet02/pages/register.php?error=invaliduid");
            exit();
        }
        if($this->invalidEmail() == false) {
            header("location: /PHP/Projet02/pages/register.php?error=invalidemail");
            exit();
        }
        if($this->existingUser() == false) {
            header("location: /PHP/Projet02/pages/register.php?error=existinguser");
            exit();
        }

        $this->setUser($this->uid, $this->email, $this->pwd);
    }

    public function registerNewsletter() {
        if($this->emptyInput() == false) {
            header("location: /PHP/Projet02/pages/infolettre.php?error=emptyinput");
            exit();
        }
        if($this->invalidEmail() == false) {
            header("location: /PHP/Projet02/pages/infolettre.php?error=invalidemail");
        }
        if($this->existingNewsletter() == false) {
            header("location: /PHP/Projet02/pages/infolettre.php?error=alreadysubscribed");
            exit();
        }

        $this->registerNewsletterDb($this->email);
    }

    private function emptyInput() {
        $result = true;
        if(empty($this->uid) || empty($this->email) || empty($this->pwd)) {
            $result = false;
        }
        return $result;
    }

    private function invalidUid() {
        $result = true;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
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

    private function existingUser() {
        $result = true;
        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        }
        return $result;
    }

    private function existingNewsletter() {
        $result = true;
        if (!$this->checkNewsletterEmail($this->email)) {
            $result = false;
        }
        return $result;
    }
}