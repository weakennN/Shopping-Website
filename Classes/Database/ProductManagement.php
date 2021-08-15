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

    public static function getProductTitle($productId)
    {
        $pdo = Database::connect();
        $query = "SELECT title FROM products WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$productId]);

        return $statement->fetchAll();
    }

    public static function getProductPrice($productId)
    {
        $pdo = Database::connect();
        $query = "SELECT price FROM products WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$productId]);

        return $statement->fetchAll();
    }

    public static function getProductDescription($productId)
    {
        $pdo = Database::connect();
        $query = "SELECT description FROM products WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$productId]);

        return $statement->fetchAll();
    }
}