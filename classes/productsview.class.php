<?php

class ProductsView extends Products {

    private $productsArray;

    public function showAllProducts() {
        $this->productsArray = $this->getProducts();

        foreach ($this->productsArray as $product) {
            echo '<div class="product-card"><a href="/PHP/Projet02/pages/product.php?id='.$product['prod_id'].'">'
            . '<img src="/PHP/Projet02/img/productImages/' . $product['prod_id'] . '.png">'
            . '<div class="product-info"><h3 class="product-title">' . $product['prod_name'] . '</h3>'
            . '<h4 class="product-price">' . $product['prod_price'] . '</h4></div></a></div>';
        }
    }

    public function showProductById($id) {
        $product = $this->getProductById($id);
        $sizes = '';

        if($product['prod_type'] == "Shirt") {
            $sizes = '<div class="info">
            <label for="shirt-sizes">Shirt size:</label> 
                <select name="shirt-sizes" id="shirt-sizes"> 
                    <option value="44">44</option> 
                    <option value="46">46</option> 
                    <option value="48">48</option> 
                    <option value="50">50</option> 
                    <option value="52">52</option> 
                    <option value="54">54</option> 
                    <option value="56">56</option>
                </select>
            </div>';
        }

        echo '
        <div class="product">
            <div class="product-image">
                <img src="/PHP/Projet02/img/productImages/'. $product['prod_id'] .'.png">
            </div>
            <div class="product-information">
                <h1 class="product-title">' . $product['prod_name'] . '</h1>
                <div class="information-container">'
                . '<h2 class="info">' . $product['prod_price'] . '</h2>' . $sizes . 
                '</div>
                <a href="#"><button class="bn-32 bn32">Add to cart</button></a>
            </div>
        </div>
        <p class="product-description">' . $product['prod_description'] . '</p>';
    }

    public function showProductsSummerSilk() {
        $this->productsArray = $this->getProductsSummerSilk();
        $i = 1;
        foreach ($this->productsArray as $product) {
            echo '<a href="/PHP/Projet02/pages/product.php?id=' . $product['prod_id'] . '">' .
            '<img id="slide-'. $i .'" src="/PHP/Projet02/img/productImages/'. $product['prod_id'] . '.png"/></a>';
            $i++;
        }
        return $i;
    }
}