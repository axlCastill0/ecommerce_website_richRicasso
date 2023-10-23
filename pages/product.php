<?php
session_start();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
} else {
    header("location: /PHP/Projet02/");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RR - Product</title>
    <link rel="stylesheet" href="/PHP/Projet02/css/styles.css">
    <link rel="stylesheet" href="/PHP/Projet02/css/product.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include("includes/header.php"); ?>
    <main class="main-container">
            <?php
            include '../classes/dbh.class.php';
            include '../classes/products.class.php';
            include '../classes/productsview.class.php';
            $product = new ProductsView();
            $product->showProductById($id);
            ?>
    </main>
    <?php include("includes/footer.php"); ?>
</body>

</html>