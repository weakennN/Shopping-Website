<?php

use private\Classes\AddressManager\AddressManager;
use private\Classes\LoginSystem\Validators\AddressValidators\AddressIdValidator;
use private\Classes\LoginSystem\Validators\AddressValidators\AddressValidator;
use private\Classes\LoginSystem\Validators\AddressValidators\CountryIdValidator;
use private\Classes\LoginSystem\Validators\NameValidator;
use private\Classes\LoginSystem\Validators\PhoneValidator;
use private\Classes\User\User;
use private\Classes\ValidationSystem\ValidationSystem;

include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";

$response = array("error" => null);

if (isset($_POST["addressId"]) && isset($_POST["name"])
    && isset($_POST["phone"]) && isset($_POST["address"])
    && isset($_POST["city"]) && isset($_POST["countryId"])) {
    $userId = User::getUserId();

    $validationSystem = new ValidationSystem(new AddressIdValidator($_POST["addressId"], "Invalid address!", $userId),
        new NameValidator($_POST["name"], "Invalid name!"), new AddressValidator($_POST["address"], "Invalid address!"),
        new NameValidator($_POST["city"], "Invalid city!"), new CountryIdValidator($_POST["countryId"], "Invalid country"),
        new PhoneValidator($_POST["phone"], "Invalid phone!"));

    if ($validationSystem->validate()) {
        $addressManager = new AddressManager($userId);
        $addressManager->editAddress($_POST["addressId"], $_POST["name"], $_POST["phone"],
            $_POST["address"], $_POST["countryId"], $_POST["city"]);
    } else {
        $response["error"] = $validationSystem->getErrorMessages();
    }
} else {
    array_push($response["error"], "Invalid address!");
}

echo json_encode($response);
