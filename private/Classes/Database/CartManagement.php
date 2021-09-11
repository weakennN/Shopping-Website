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

    public static function insertSessionItemsToUserCart(array $sessionItems, $cartId)
    {
        $pdo = Database::connect();
        $query = "INSERT INTO cart_item (cart_id,product_id,quantity) VALUES (?,?,?);";
        foreach ($sessionItems as $sessionItem) {
            if (UserManagement::isProductAdded($cartId, $sessionItem["product_id"])) {
                UserManagement::updateProductQuantity($cartId, $sessionItem["product_id"], $sessionItem["quantity"]);
            } else {
                $statement = $pdo->prepare($query);
                $statement->execute([$cartId, $sessionItem["product_id"], $sessionItem["quantity"]]);
            }
            $productPrice = (float)ProductManagement::getProductPrice($sessionItem["product_id"])[0]["price"];
            UserManagement::updateCartTotal($cartId, $productPrice * (int)$sessionItem["quantity"]);
        }
    }

    public static function deleteSessionItems($sessionCartId)
    {
        $pdo = Database::connect();
        $query = "DELETE FROM session_cart_item WHERE cart_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$sessionCartId]);
    }

    public static function emptyCart($cartId)
    {
        $pdo = Database::connect();
        $query = "UPDATE cart SET total = 0 WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$cartId]);
    }

    public static function deleteCartItems($cartId)
    {
        $pdo = Database::connect();
        $query = "DELETE FROM cart_item WHERE cart_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$cartId]);
    }
}