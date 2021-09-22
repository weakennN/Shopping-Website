<?php

use private\Classes\Common\Encryptor;
use private\Classes\Database\UserManagement;
use private\Classes\LoginSystem\Logger;
use private\Classes\LoginSystem\Validators\LoginEmailValidator;
use private\Classes\LoginSystem\Validators\LoginPasswordValidator;
use private\Classes\ValidationSystem\ValidationSystem;

include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";

$email = $_POST["email"];
$password = $_POST["password"];
$validationSystem = new ValidationSystem(new LoginPasswordValidator($password, "Invalid password", $email),
    new LoginEmailValidator($email, "Invalid email"));

if ($validationSystem->validate()) {
    $logger = new Logger();
    $logger->logInUser($email);
    header('Location: http://localhost/index.php');
    include_once $_SERVER["HOME"] . "/private/Includes/CartInclude/insertSessionProductsToUserCart.php";
    loadSessionProducts(UserManagement::getUserId($email));
} else {
    header("Location: http://localhost/login.php?error=" . Encryptor::encrypt("Invalid password or email!"));
}