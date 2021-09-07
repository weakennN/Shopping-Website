<?php

namespace private\Classes\Database;

class AddressManagement
{
    public static function addAddress($userId, $name, $phone, $address, $shipping_country_id, $city)
    {
        $pdo = Database::connect();
        $query = "INSERT INTO address (user_id,name,phone,address,shipping_country,city) VALUES(?, ?, ?, ?, ?, ?)";
        $statement = $pdo->prepare($query);
        $statement->execute([$userId, $name, $phone, $address, $shipping_country_id, $city]);
    }

    public static function addressExist($userId, $address, $countryId, $city): bool
    {
        $pdo = Database::connect();
        $query = "SELECT * FROM address WHERE user_id = ? AND address = ? AND shipping_country = ? AND city = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$userId, $address, $countryId, $city]);

        if ($statement->fetch()) {
            return false;
        }

        return true;
    }

    public static function getAddressId($userId, $address, $countryId)
    {
        $pdo = Database::connect();
        $query = "SELECT id FROM address WHERE user_id = ? AND address = ? AND shipping_country = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$userId, $address, $countryId]);

        return $statement->fetch()["id"];
    }
}