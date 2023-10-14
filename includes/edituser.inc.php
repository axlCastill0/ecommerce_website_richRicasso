<?php
session_start();

if(isset($_POST["submit"])) {
    $user_email = $_POST["email"];
    $user_firstname = $_POST["firstname"];
    $user_lastname = $_POST["lastname"];
    $newsletter = $_POST["newsletter"];
    $user_newsletter = 0;
    if($newsletter == true) {
        $user_newsletter = 1;
    }

    include '../classes/dbh.class.php';
    include '../classes/edituser.class.php';
    include '../classes/editusercontroller.class.php';
    $user = new EditUserController($_SESSION["user_id"], $user_email, $user_firstname, $user_lastname, $user_newsletter);

    $user->editUser();

    header("location: /PHP/Projet02/");
}