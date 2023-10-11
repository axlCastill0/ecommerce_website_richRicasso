<?php
include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rich Ricasso</title>
</head>
<body>
    <h1>hello</h1>
    <?php
        $productsObj = new ProductsView();

        $productsObj->showUser("River in the desert - Rich Ricasso 1st Edition");
    ?>
</body>
</html>