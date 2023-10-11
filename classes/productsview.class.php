<?php

class ProductsView extends Products {

    public function showUser($name) {
        $results = $this->getUser($name);
        echo 'Name of product: ' . $results[0]["Name"] . 'Price of product: ' . $results[0]["Price"];
    }

}