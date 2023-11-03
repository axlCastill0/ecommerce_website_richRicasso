<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <footer class="footer">
        <div class="footer-content">
            <ul class="socials">
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <?php
                if(isset($_SESSION["user_id"])) { ?>
                    <li><a href="/PHP/Projet02/pages/account.php"><i class="far fa-newspaper"></i></a></li>
                <?php } else { ?>
                    <li><a href="/PHP/Projet02/pages/infolettre.php"><i class="far fa-newspaper"></i></a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy; 2023 - Designed by <span>Les Tacos Rouges</span></p>
        </div>
    </footer>
</body>

</html>