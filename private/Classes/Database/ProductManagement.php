<?php

namespace private\Classes\Database;

class ProductManagement
{
    public static function getProducts(): array
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

        return $statement->fetch()["title"];
    }

    public static function getProductPrice($productId): bool|array
    {
        $pdo = Database::connect();
        $query = "SELECT price FROM products WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$productId]);

        return $statement->fetchAll();
    }

    public static function getProductDescription($productId): bool|array
    {
        $pdo = Database::connect();
        $query = "SELECT description FROM products WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$productId]);

        return $statement->fetchAll();
    }

    public static function getProduct($productId)
    {
        $pdo = Database::connect();
        $query = "SELECT * FROM products WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$productId]);

        return $statement->fetch();
    }

    public static function getProductsShortDescription($productId)
    {
        $pdo = Database::connect();
        $query = "SELECT short_description FROM products WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$productId]);

        return $statement->fetch()["short_description"];
    }

    public static function getImage($productId)
    {
        $pdo = Database::connect();
        $query = "SELECT image FROM products WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$productId]);

        return $statement->fetch()["image"];
    }
}