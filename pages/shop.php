<?php
session_start();
include '../classes/dbh.class.php';
include '../classes/products.class.php';
include '../classes/productsview.class.php';
$products = new ProductsView();
$checked = [];
$filteredIds = [];
if (isset($_GET['colors'])) {
    $checked = $_GET['colors'];
    foreach($checked as $colorId) {
        $ids[] = $products->getIdsWithColor($colorId);
        foreach($ids as $id) {
            foreach($id as $i) {
                $filteredIds[] = $i;
            }
        }
    }
    sort($filteredIds);
    $filteredIds = array_unique($filteredIds);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RR - Shop</title>
    <link rel="stylesheet" href="/PHP/Projet02/css/styles.css">
    <link rel="stylesheet" href="/PHP/Projet02/css/shop.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include('includes/header.php'); ?>
    <main>
        <div class="main-container">
            <div class="settings-container">
                <form action="" method="get">
                    <button type="submit" class="btn-search">Filter</button>
                    <?php
                    $products->showFilterSettings($checked);
                    ?>
                </form>
            </div>
            <div class="products-container">
                <?php
                if(isset($_GET['colors'])) {
                    foreach($filteredIds as $productId) {
                        echo $products->showProductContainer($productId);
                    }
                } else {
                    $products->showAllProducts();
                }
                ?>
            </div>
        </div>
    </main>
    <?php include('includes/footer.php'); ?>
</body>

</html>