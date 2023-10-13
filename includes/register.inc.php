<?php

if(isset($_POST["submit"])) {
    // Grabbing data
    $uid = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    // Instantiate SingupController
    include '../classes/dbh.class.php';
    include '../classes/users.class.php';
    include '../classes/userscontroller.class.php';
    $user = new UsersController($uid, $email, $pwd);

    // Running error handlers
    $user->registerUser();

    // Going back to home page
    header("location: /PHP/Projet02/index.php?error=none");

}