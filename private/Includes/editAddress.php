<?php

use private\Classes\AddressManager\AddressManager;
use private\Classes\Common\Decrypt;
use private\Classes\LoginSystem\Validators\AddressValidators\AddressIdValidator;
use private\Classes\LoginSystem\Validators\AddressValidators\CountryIdValidator;
use private\Classes\LoginSystem\Validators\NameValidator;

include_once "../AutoLoad/autoLoader.php";

$response = array("error" => null);

if (!is_string($_POST["name"]) || !is_numeric($_POST["phone"]) || !is_string($_POST["address"])
    || !is_string($_POST["city"]) || !is_numeric($_POST["countryId"])) {
    $response["error"] = "Invalid address!";
    echo json_encode($response);
    return;
}

if (isset($_POST["addressId"]) && isset($_POST["name"])
    && isset($_POST["phone"]) && isset($_POST["address"])
    && isset($_POST["city"]) && isset($_POST["countryId"])) {
    $userId = explode(" ", Decrypt::decrypt($_COOKIE["userId"]))[0];

    $validators = array(new AddressIdValidator($_POST["addressId"], $userId),
        new NameValidator($_POST["name"]), new NameValidator($_POST["address"]),
        new NameValidator($_POST["city"]), new CountryIdValidator($_POST["countryId"]));
    $edit = true;
    foreach ($validators as $validator) {
        if (!$validator->validate()) {
            $response["error"] = "Invalid address!";
            $edit = false;
            break;
        }
    }

    if ($edit) {
        $addressManager = new AddressManager($userId);
        $addressManager->editAddress($_POST["addressId"], $_POST["name"], $_POST["phone"],
            $_POST["address"], $_POST["countryId"], $_POST["city"]);
    }
} else {
    $response["error"] = "Invalid address!";
}

echo json_encode($response);
