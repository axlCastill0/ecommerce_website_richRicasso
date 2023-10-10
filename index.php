<?php

$conn = mysqli_connect('localhost', 'root', '', 'ricassodb');

if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

$sql = 'SELECT Name, Price FROM products LIMIT 4';

$result = mysqli_query($conn, $sql);

$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rich Ricasso</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include("pages/header.php") ?>
    <img src="img/intro-shirt.png" alt="cool shirt" id="intro-img">
    <main class="container">
        <div class="popular-container">
            <h2 class="popular-title">Popular</h2>
            <div class="popular-cards">
                <?php
                for ($i = 0; $i < count($products); $i++) {
                    echo "
                <div class=\"product-card\">
                    <img src=\"productImages/" . $i + 1 . ".png\">
                    <p>" . $products[$i]["Name"] . "</p>
                    <p>" . $products[$i]["Price"] . "</p>
                </div>";
                }
                ?>
            </div>
    </main>
    <?php include("pages/footer.php") ?>
</body>

</html>