<?php

if(isset($_POST["submit"])) {
    // Grabbing data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    // Instantiate SingupController
    include '../classes/dbh.class.php';
    include '../classes/users.class.php';
    include '../classes/userscontroller.class.php';
    $user = new UsersController($uid, "email@email.com", $pwd);

    // Running error handlers
    $user->loginUser();

    // Going back to home page
    header("location: /PHP/Projet02/index.php?error=none");

}