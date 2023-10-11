<?php

class Products extends Dbh {

    protected function getUser($name) {
        $sql = "SELECT * FROM products WHERE Name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        return $results;
    }

}