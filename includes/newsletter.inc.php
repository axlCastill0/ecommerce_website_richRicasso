<?php

if(isset($_POST['email'])) {
    $email = $_POST['email'];

    include '../classes/dbh.class.php';
    include '../classes/users.class.php';
    include '../classes/userscontroller.class.php';
    $user = new UsersController('uid', $email, 'pwd');

    $user->registerNewsletter();

    header('location: /PHP/Projet02/index.php?message=newslettersuccess');
}