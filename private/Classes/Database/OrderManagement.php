<?php

namespace private\Classes\Database;

class OrderManagement
{
    public static function createOrder($userId, $total)
    {
        $pdo = Database::connect();
        $query = "INSERT INTO order_list (user_id, total) VALUES(?, ?)";
        $statement = $pdo->prepare($query);
        $statement->execute([$userId, $total]);
    }

    public static function getOrderId($userId)
    {
        $pdo = Database::connect();
        $query = "SELECT * FROM order_list WHERE user_id = ? ORDER BY id DESC LIMIT 1";
        $statement = $pdo->prepare($query);
        $statement->execute([$userId]);

        return $statement->fetch()["id"];
    }

    public static function createShippingDetails($orderId, $name, $phone, $address, $city, $countryId)
    {
        $pdo = Database::connect();
        $query = "INSERT INTO shipping_details (order_id, name, phone, address, city, country_id) VALUES(?, ?, ?, ?, ?, ?)";
        $statement = $pdo->prepare($query);
        $statement->execute([$orderId, $name, $phone, $address, $city, $countryId]);
    }

    public static function getShippingDetailsId($orderId)
    {
        $pdo = Database::connect();
        $query = "SELECT id FROM shipping_details WHERE order_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$orderId]);

        return $statement->fetch()["id"];
    }

    public static function setShippingDetailsIdToOrder($orderId, $shippingDetailsId)
    {
        $pdo = Database::connect();
        $query = "UPDATE order_list SET shipping_details_id = ? WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$shippingDetailsId, $orderId]);
    }
}