<?php

namespace private\Classes\Database;

class SearchManagement
{

    public static function searchProducts($title): bool|array
    {
        $title = "%" . $title . "%";
        $pdo = Database::connect();
        $query = "SELECT * FROM products WHERE title LIKE ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$title]);

        return $statement->fetchAll();
    }
}