<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rich Ricasso</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include('pages\headfoot\header.php') ?>
    <div class="intro-image-container">
        <img src="img/intro-shirt.png" alt="cool shirt" id="intro-img">
    </div>
    <main class="main-container">
        <div class="popular-container">
            <h2 class="popular-title">Popular</h2>
            <div class="popular-cards">
                <?php
                    if(isset($_SESSION["user_id"])) {
                        echo '<h1>HELLO '. $_SESSION["uid"] .'</h1>';
                    }
                ?>
            </div>
    </main>
    <?php include('pages\headfoot\footer.php') ?>
</body>

</html>