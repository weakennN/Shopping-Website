<?php

use private\Classes\Database\UserManagement;
use private\Classes\LoginSystem\Logger;
use private\Classes\LoginSystem\Validators\LoginEmailValidator;
use private\Classes\LoginSystem\Validators\LoginPasswordValidator;

include_once "../../AutoLoad/autoLoader.php";

$email = $_POST["email"];
$password = $_POST["password"];

$logger = new Logger(array(new LoginPasswordValidator($password, "Invalid password", $email),
    new LoginEmailValidator($email,"Invalid email")));

if ($logger->verify()) {
    $logger->logInUser($email, $password);
    header('Location: http://localhost/test/public/index.php');
    include_once "../CartInclude/insertSessionProductsToUserCart.php";
    loadSessionProducts(UserManagement::getUserId($email));
} else {
    header("Location: " . $_SERVER['HTTP_REFERER'] . "error=1");
}