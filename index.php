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
    <?php include('pages\includes\header.php') ?>
    <div class="intro-image-container">
        <img src="img/intro-shirt.png" alt="cool shirt">
    </div>
    <main class="main-container">
        <div class="introduction">
            <h2 class="section-title">Rich Ricasso</h2>
            <div class="introduction-container">
                <img src="/PHP/Projet02/img/rich-ricasso.png" alt="rich ricasso portrait">
                <p>Rich Ricasso, le célèbre cravatier et chemisier, souhaite lancer sa boutique en ligne pour présenter
                    sa nouvelle gamme d'été en soie unisexe. Son style, inspiré du mouvement vaporwave et vaporfashion
                    accentue les tons pastel tels que le bleu ciel, le rose poudré et le violet lavande, et a ainsi
                    conquis le monde de l'ultra-luxe. Il souhaite maintenant ouvrir sa gamme au grand public. Votre
                    mission est de concevoir et réaliser cette plateforme, mettant en avant la singularité et le luxe
                    des produits.</p>
            </div>
        </div>
        <div class="collection">
            <h2 class="section-title">Summer Silk Collection</h2>
            <div class="description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum vel odio repellat sequi veniam
                    obcaecati dolore sapiente omnis sint. Ducimus esse corporis et animi numquam? Sapiente rem quae
                    placeat at? Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur a architecto
                    aspernatur optio officia quidem dolores sequi officiis tempora aut. Incidunt iste explicabo
                    voluptatem aliquid debitis atque autem temporibus veniam?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eum laborum tempora, libero
                    perferendis nulla natus consequatur animi dicta. Minima, eos magnam. Laboriosam, officia velit ipsam
                    placeat magni dolor repellat!</p>
            </div>
            <section class="products-container">
                <div class="slider-wrapper">
                    <div class="slider">
                        <?php 
                        include '../classes/dbh.class.php';
                        include '../classes/products.class.php';
                        include '../classes/productsview.class.php';
                        $products = new ProductsView();
                        $numberSlides = $products->showProductsSummerSilk();
                        ?>
                    </div>
                    <div class="slider-nav">
                        <?php
                        for ($i = 1; $i < $numberSlides; $i++) {
                            echo '<a href="#slide-' . $i . '"></a>';
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php include('pages\includes\footer.php') ?>
</body>

</html>