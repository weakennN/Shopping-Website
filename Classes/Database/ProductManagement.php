<?php

class ProductManagement
{

    public static function getProducts()
    {
        $pdo = Database::connect();
        $query = "SELECT * FROM products";
        $statement = $pdo->query($query);
        $products = array();
        while ($row = $statement->fetch()) {
            array_push($products, $row);
        }

        return $products;
    }
}