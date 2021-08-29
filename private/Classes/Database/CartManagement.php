<?php

namespace private\Classes\Database;

class CartManagement
{

    public static function getUserCartItems($cartId): bool|array
    {
        $pdo = Database::connect();
        $query = "SELECT * from cart_item WHERE cart_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$cartId]);

        return $statement->fetchAll();
    }

    public static function getSessionCartItems($cartId): bool|array
    {
        $pdo = Database::connect();
        $query = "SELECT * FROM session_cart_item WHERE cart_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$cartId]);

        return $statement->fetchAll();
    }

    public static function getUserCartTotal($cartId)
    {
        $pdo = Database::connect();
        $query = "SELECT total FROM cart WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$cartId]);

        return $statement->fetch()["total"];
    }

    public static function getUserTotalProducts($cartId)
    {
        $pdo = Database::connect();
        $query = "SELECT SUM(quantity) AS total_products FROM cart_item WHERE cart_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$cartId]);

        return $statement->fetch()["total_products"];
    }

    public static function getSessionCartTotalProducts($cartId)
    {
        $pdo = Database::connect();
        $query = "SELECT SUM(quantity) as total_products FROM session_cart_item WHERE cart_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$cartId]);

        return $statement->fetch()["total_products"];
    }
}