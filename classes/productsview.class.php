<?php

class ProductsView extends Products {

    private $productsArray;

    public function showAllProducts() {
        $this->productsArray = $this->getProducts();

        foreach ($this->productsArray as $product) {
            echo '<div class="product-card"><a href="/PHP/Projet02/pages/product.php">'
            . '<img src="/PHP/Projet02/img/productImages/' . $product['prod_id'] . '.png">'
            . '<div class="product-info"><h3 class="product-title">' . $product['prod_name'] . '</h3>'
            . '<h4 class="product-price">' . $product['prod_price'] . '</h4></div></a></div>';
        }
    }
}