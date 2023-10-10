<?php

$conn = mysqli_connect('localhost', 'root', '', 'ricassodb');

if(!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

$sql = 'SELECT * FROM products';

$result = mysqli_query($conn, $sql);

$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/shop.css">
</head>
<body>
    <?php include('header.php') ?>
    <main>
        <?php
        for ($i = 0; $i < count($products); $i++) {
            echo '<h1>' . $products[$i]['Name'] . '</h1>';
        }
        ?>
    </main>
    <?php include('footer.php') ?>
</body>
</html>