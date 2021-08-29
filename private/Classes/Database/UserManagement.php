<?php

namespace private\Classes\Database;

class UserManagement
{
    public static function isEmailTaken($email): bool
    {
        $pdo = Database::connect();
        $query = "SELECT email FROM accounts WHERE email = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$email]);

        if ($statement->fetch()) {
            return true;
        }

        return false;
    }

    public static function createUser($firstName, $lastName, $email, $password, $authentication)
    {
        $pdo = Database::connect();
        $query = "INSERT INTO accounts (first_name,last_name,email,password,authentication) VALUES (?, ?, ?, ?, ?)";
        $statement = $pdo->prepare($query);
        $statement->execute([$firstName, $lastName, $email, $password, $authentication]);
    }

    public static function getUserId($userEmail)
    {
        $pdo = Database::connect();
        $query = "SELECT id FROM accounts WHERE email = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$userEmail]);

        return $statement->fetch()["id"];
    }

    public static function setCartAndFavouriteListId($userId)
    {
        $pdo = Database::connect();
        $query = "UPDATE accounts SET cart_id = ?, favourite_list_id = ? WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$userId, $userId, $userId]);
    }

    public static function getUserAuthentication($userId)
    {
        $pdo = Database::connect();
        $query = "SELECT authentication FROM accounts WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$userId]);

        return $statement->fetch()["authentication"];
    }

    public static function getUserPassword($email)
    {
        $pdo = Database::connect();
        $query = "SELECT password FROM accounts WHERE email = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$email]);

        return $statement->fetch()["password"];
    }

    public static function createShoppingCart($id)
    {
        $pdo = Database::connect();
        $query = "INSERT INTO cart (id,user_id,total) VALUES (?,?,0.00)";
        $statement = $pdo->prepare($query);
        $statement->execute([$id, $id]);
    }

    public static function isProductAdded($cartId, $productId): bool
    {
        $pdo = Database::connect();
        $query = "SELECT * FROM cart_item WHERE cart_id = ? AND product_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$cartId, $productId]);

        if ($statement->fetch()) {
            return true;
        }

        return false;
    }

    public static function updateProductQuantity($cartId, $productId, $value)
    {
        $pdo = Database::connect();
        $query = "UPDATE cart_item SET quantity = quantity + ? WHERE cart_id = ? AND product_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$value, $cartId, $productId]);
    }

    public static function createCartItem($cartId, $productId)
    {
        $pdo = Database::connect();
        $query = "INSERT INTO cart_item (cart_id,product_id,quantity) VALUES (?, ?, 1);";
        $statement = $pdo->prepare($query);
        $statement->execute([$cartId, $productId]);
    }

    public static function getProductPrice($productId)
    {
        $pdo = Database::connect();
        $query = "SELECT price FROM products WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$productId]);

        return $statement->fetch()["price"];
    }

    public static function updateCartTotal($cartId, $value)
    {
        $pdo = Database::connect();
        $query = "UPDATE cart SET total = total + ? WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$value, $cartId]);
    }

    public static function getProductQuantity($productId)
    {
        $pdo = Database::connect();
        $query = "SELECT quantity FROM cart_item WHERE product_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$productId]);

        return $statement->fetch()["quantity"];
    }

    public static function deleteCartItem($cartId, $productId)
    {
        $pdo = Database::connect();
        $query = "DELETE FROM cart_item WHERE cart_id = ? AND product_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$cartId, $productId]);
    }

    public static function isSessionProductAdded($macAddress, $productId): bool
    {
        $pdo = Database::connect();
        $query = "SELECT cart_id FROM session_cart_item WHERE cart_id = ? AND product_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$macAddress, $productId]);

        if ($statement->fetch()) {
            return true;
        }

        return false;
    }

    public static function updateSessionProductQuantity($macAddress, $productId, $value)
    {
        $pdo = Database::connect();
        $query = "UPDATE session_cart_item SET quantity = quantity + ? WHERE cart_id = ? AND product_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$value, $macAddress, $productId]);
    }

    public static function createSessionCartItem($macAddress, $productId)
    {
        $pdo = Database::connect();
        $query = "INSERT INTO session_cart_item (cart_id,product_id,quantity) VALUES (?, ? , 1)";
        $statement = $pdo->prepare($query);
        $statement->execute([$macAddress, $productId]);
    }

    public static function deleteSessionCartItem($macAddress, $productId)
    {
        $pdo = Database::connect();
        $query = "DELETE FROM session_cart_item WHERE cart_id = ? AND product_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$macAddress, $productId]);
    }

    public static function doesProductExist($productId): bool
    {
        $pdo = Database::connect();
        $query = "SELECT id FROM products WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$productId]);

        if ($statement->fetch()) {
            return true;
        }

        return false;
    }

    public static function getSessionItemQuantity($macAddress, $productId)
    {
        $pdo = Database::connect();
        $query = "SELECT quantity FROM session_cart_item WHERE cart_id = ? AND product_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$macAddress, $productId]);

        return $statement->fetch()["quantity"];
    }
}