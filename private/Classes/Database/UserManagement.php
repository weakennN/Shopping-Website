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
}