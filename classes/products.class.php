<?php

class Products extends Dbh {

    protected function getProducts() {
        $stmt = $this->connect()->query('SELECT prod_id, prod_name, prod_price FROM products;');

        if(!$stmt) {
            $stmt = null;
            header("location: /PHP/Projet02/shop.php?error=stmtfailed");
            exit();
        }

        $products = $stmt->fetchAll();
        $stmt = null;

        return $products;
    }

    protected function getProductById($id) {
        $stmt = $this->connect()->prepare("SELECT * FROM products WHERE prod_id = ?;");
        if(!$stmt->execute([$id])) {
            $stmt = null;
            header("location: /PHP/Projet02/shop.php?error=stmtfailed");
            exit();
        }
        $product = $stmt->fetch();
        $stmt = null;
        return $product;
    }
}