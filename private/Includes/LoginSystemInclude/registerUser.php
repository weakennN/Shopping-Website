<?php

use private\Classes\Common\Encryptor;
use private\Classes\Database\UserManagement;
use private\Classes\LoginSystem\Register;
use private\Classes\LoginSystem\Validators\NameValidator;
use private\Classes\LoginSystem\Validators\RegisterEmailValidator;
use private\Classes\LoginSystem\Validators\RegisterPasswordValidator;
use private\Classes\LoginSystem\Validators\RepeatPasswordValidator;
use private\Classes\ValidationSystem\ValidationSystem;

include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];
$repeatPassword = $_POST["repeatPassword"];
$validationSystem = new ValidationSystem(new NameValidator($firstName, "Invalid first name!")
    , new NameValidator($lastName, "Invalid last name!"), new RegisterEmailValidator($email, "Email already exist!"),
    new RegisterPasswordValidator($password, "Invalid password!"), new RepeatPasswordValidator($password, "Password dont match!", $repeatPassword));

if ($validationSystem->validate()) {
    $register = new Register();
    $register->registerUser($firstName, $lastName, $email, $password);
    include_once $_SERVER["HOME"] . "/private/Includes/CartInclude/insertSessionProductsToUserCart.php";
    loadSessionProducts(UserManagement::getUserId("$email"));
    header('Location: http://localhost/index.php');
} else {
    header("Location: http://localhost/register.php?error=" . Encryptor::encrypt($validationSystem->getErrorMessages()[0]));
}