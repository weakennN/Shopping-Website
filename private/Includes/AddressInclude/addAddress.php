<?php

use private\Classes\AddressManager\AddressManager;
use private\Classes\Database\AddressManagement;
use private\Classes\LoginSystem\Validators\AddressValidators\DuplicateAddressValidator;
use private\Classes\LoginSystem\Validators\AddressValidators\CountryIdValidator;
use private\Classes\LoginSystem\Validators\NameValidator;
use private\Classes\LoginSystem\Validators\PhoneValidator;
use private\Classes\User\User;
use private\Classes\ValidationSystem\ValidationSystem;

include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";

if (isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["address"])
    && isset($_POST["city"]) && isset($_POST["countryId"])) {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $countryId = $_POST["countryId"];

    $response = array("error" => null, "addressId" => null);

    if (!is_string($name) || !is_numeric($phone) || !is_string($address) || !is_string($city) || !is_numeric($countryId)) {
        $response["error"] = "Invalid address!";
        echo json_encode($response);
        return;
    }

    $userId = User::getUserId();

    $addressValidator = new DuplicateAddressValidator($address, "Address already exist", $userId, $countryId, $city);
    $nameValidator = new NameValidator($name, "Invalid name");
    $cityValidator = new NameValidator($city, "Invalid city");
    $phoneValidator = new PhoneValidator($phone, "Invalid phone");
    $countryValidator = new CountryIdValidator($countryId, "Invalid country");

    $validationSystem = new ValidationSystem($addressValidator, $nameValidator,
        $cityValidator, $phoneValidator, $countryValidator);

    if ($validationSystem->validate()) {
        $addressManager = new AddressManager($userId);
        $addressManager->addAddress($name, $phone, $address, $countryId, $city);
        $response["addressId"] = AddressManagement::getAddressId($userId, $address, $countryId);
    } else {
        $response["error"] = $validationSystem->getErrorMessages();
    }


    $json = json_encode($response);

    echo $json;
}
