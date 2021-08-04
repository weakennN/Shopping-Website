<?php

$pdo = Database::connect();

$query = "SELECT * FROM products";
$arr = array();
$statement = $pdo->query($query);

while ($row = $statement->fetch()) {
    array_push($arr, $row);
}

