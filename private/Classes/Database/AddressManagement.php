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

    public static function addressIdExist($addressId, $userId): bool
    {
        $pdo = Database::connect();
        $query = "SELECT id FROM address WHERE id = ? AND user_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$addressId, $userId]);

        if (!$statement->fetch()) {
            return false;
        }

        return true;
    }

    public static function countryIdExist($countryId): bool
    {
        $pdo = Database::connect();
        $query = "SELECT id FROM shipping_country WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$countryId]);

        if (!$statement->fetch()) {
            return false;
        }

        return true;
    }

    public static function editAddress($userId, $addressId, $name, $phone, $address, $countryId, $city)
    {
        $pdo = Database::connect();
        $query = "UPDATE address SET name = ?,phone = ?,address = ?,shipping_country = ?,city = ? WHERE id = ? AND user_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$name, $phone, $address, $countryId, $city, $addressId, $userId]);
    }

    public static function deleteAddress($addressId, $userId)
    {
        $pdo = Database::connect();
        $query = "DELETE FROM address WHERE id = ? AND user_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$addressId, $userId]);
    }

    public static function getAddresses($userId): bool|array
    {
        $pdo = Database::connect();
        $query = "SELECT * FROM address WHERE user_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$userId]);

        return $statement->fetchAll();
    }

    public static function getCountryById($countryId)
    {
        $pdo = Database::connect();
        $query = "SELECT country FROM shipping_country WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$countryId]);

        return $statement->fetch()["country"];
    }

    public static function getAddress($userId, $addressId)
    {
        $pdo = Database::connect();
        $query = "SELECT * FROM address WHERE user_id = ? AND id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$userId, $addressId]);

        return $statement->fetch();
    }
}