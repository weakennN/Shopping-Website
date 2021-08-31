<?php
include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];
$repeatPassword = $_POST["repeatPassword"];

$validators = array(new \private\Classes\LoginSystem\Validators\NameValidator($firstName)
, new \private\Classes\LoginSystem\Validators\NameValidator($lastName), new \private\Classes\LoginSystem\Validators\RegisterEmailValidator($email),
    new \private\Classes\LoginSystem\Validators\RegisterPasswordValidator($password), new \private\Classes\LoginSystem\Validators\RepeatPasswordValidator($password, $repeatPassword));

$register = new \private\Classes\LoginSystem\Register($validators);

if ($register->verify()) {
    $register->registerUser($firstName, $lastName, $email, $password);
    header('Location: http://localhost/test/public/index.php');
    include_once "insertSessionProductsToUserCart.php";
    loadSessionProducts(\private\Classes\Database\UserManagement::getUserId("$email"));
} else {
    header("Location: " . $_SERVER['HTTP_REFERER']);
}