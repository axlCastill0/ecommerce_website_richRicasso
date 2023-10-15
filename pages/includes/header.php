<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <a href="/PHP/Projet02/" class="logo">Rich Ricasso</a>

        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu hoverable' id="menu-icon"></i>
            <i class='bx bx-x hoverable' id="close-icon"></i>
        </label>

        <nav class="navbar">
            <a href="/PHP/Projet02/" class="hoverable">Home</a>
            <a href="/PHP/Projet02/pages/shop.php" class="hoverable">Shop</a>
            <a href="#" class="hoverable">Contact me</a>
        </nav>

        <nav class="navbar-icons">
            <?php
            if (isset($_SESSION["user_id"])) {
                ?>
                <a href="/PHP/Projet02/pages/account.php"><i class='bx bx-user-circle hoverable'></i></a>
            <?php } else { ?>
                <a href="/PHP/Projet02/pages/login.php"><i class='bx bx-user-plus hoverable'></i></a>
            <?php } ?>
            <a href="#"><i class='bx bx-cart hoverable'></i></a>
        </nav>
    </header>
</body>

</html>