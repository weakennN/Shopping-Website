<?php

namespace private\Classes\Database;

use PDO;

class Database
{
    private static $host = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $database = "main_db";

    public static function connect()
    {
        $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$database;
        $pdo = new PDO($dsn, self::$username, self::$password);
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}