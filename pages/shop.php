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
                <div class="type-setting">
                    <h3>Type</h3>
                    <div class="setting">
                        <input type="checkbox" id="shirt" value="Shirt">
                        <label for="shirt">Shirt</label>
                    </div>
                    <div class="setting">
                        <input type="checkbox" id="tie" value="Tie">
                        <label for="tie">Tie</label>
                    </div>
                </div>
                <div class="price-setting">
                    <h3>Price</h3>
                    <div class="slide-container setting">
                        <input type="range" min="1" max="500" value="500" class="slider" id="myRange">
                    </div>
                    <div class="price-checkbox">
                        <div class="setting">
                            <input type="checkbox" id="highest" value="highest">
                            <label for="highest">Highest to Lowest</label>
                        </div>
                        <div class="setting">
                            <input type="checkbox" id="lowest" value="lowest">
                            <label for="lowest">Lowest to Highest</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="products-container">

            </div>
        </div>
    </main>
    <?php include('includes/footer.php'); ?>
</body>

</html>