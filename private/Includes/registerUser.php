<?php

use private\Classes\Database\UserManagement;
use private\Classes\LoginSystem\Register;
use private\Classes\LoginSystem\Validators\NameValidator;
use private\Classes\LoginSystem\Validators\RegisterEmailValidator;
use private\Classes\LoginSystem\Validators\RegisterPasswordValidator;
use private\Classes\LoginSystem\Validators\RepeatPasswordValidator;

include_once "../AutoLoad/autoLoader.php";

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];
$repeatPassword = $_POST["repeatPassword"];

$validators = array(new NameValidator($firstName)
, new NameValidator($lastName), new RegisterEmailValidator($email),
    new RegisterPasswordValidator($password), new RepeatPasswordValidator($password, $repeatPassword));

$register = new Register($validators);

if ($register->verify()) {
    $register->registerUser($firstName, $lastName, $email, $password);
    header('Location: http://localhost/test/public/index.php');
    include_once "insertSessionProductsToUserCart.php";
    loadSessionProducts(UserManagement::getUserId("$email"));
} else {
    header("Location: " . $_SERVER['HTTP_REFERER']);
}