<?php

class Products extends Dbh {

    protected function getProducts() {
        $stmt = $this->connect()->query('SELECT prod_id, prod_name, prod_price FROM products;');

        if(!$stmt) {
            $stmt = null;
            header("location: /PHP/Projet02/index.php?error=stmtfailed");
            exit();
        }

        $products = $stmt->fetchAll();
        $stmt = null;

        return $products;
    }
}