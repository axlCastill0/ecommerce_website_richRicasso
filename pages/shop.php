<?php
session_start();
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
                <div class="type-setting settings">
                    <h3 class="setting-title">Type</h3>
                    <div class="setting">
                        <input type="checkbox" id="shirt" value="Shirt">
                        <label for="shirt">Shirt</label>
                    </div>
                    <div class="setting">
                        <input type="checkbox" id="tie" value="Tie">
                        <label for="tie">Tie</label>
                    </div>
                </div>
                <div class="price-setting settings">
                    <h3 class="setting-title">Price</h3>
                    <div class="setting">
                        <input type="checkbox" id="highest" value="highest">
                        <label for="highest">Highest to Lowest</label>
                    </div>
                    <div class="setting">
                        <input type="checkbox" id="lowest" value="lowest">
                        <label for="lowest">Lowest to Highest</label>
                    </div>
                </div>
                <div class="collection-setting settings">
                    <h3 class="setting-title">Collection</h3>
                    <div class="setting">
                        <input type="checkbox" id="first-edition" value="first-edition">
                        <label for="first-edition">First Edition</label>
                    </div>
                    <div class="setting">
                        <input type="checkbox" id="summer-silk" value="summer-silk">
                        <label for="summer-silk">Summer Silk</label>
                    </div>
                </div>
                <div class="color-setting settings">
                    <h3 class="setting-title">Color</h3>
                    <div class="setting">
                        <input type="checkbox" id="red" value="red">
                        <label for="red">Red</label>
                    </div>
                    <div class="setting">
                        <input type="checkbox" id="blue" value="blue">
                        <label for="blue">Blue</label>
                    </div>
                    <div class="setting">
                        <input type="checkbox" id="pink" value="pink">
                        <label for="pink">Pink</label>
                    </div>
                    <div class="setting">
                        <input type="checkbox" id="green" value="green">
                        <label for="green">Green</label>
                    </div>
                    <div class="setting">
                        <input type="checkbox" id="purple" value="purple">
                        <label for="purple">Purple</label>
                    </div>
                </div>
            </div>
            <div class="products-container">
                <?php
                include '../classes/dbh.class.php';
                include '../classes/products.class.php';
                include '../classes/productsview.class.php';
                $products = new ProductsView();
                $products->showAllProducts();
                ?>
            </div>
        </div>
    </main>
    <?php include('includes/footer.php'); ?>
</body>

</html>