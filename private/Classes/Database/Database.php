<?php

namespace private\Classes\Database;

use PDO;

class Database
{
    private static string $host = "localhost";
    private static string $username = "root";
    private static string $password = "";
    private static string $database = "main_db";

    public static function connect()
    {
        $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$database;
        $pdo = new PDO($dsn, self::$username, self::$password);
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}