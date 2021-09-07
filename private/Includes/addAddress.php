<?php

use private\Classes\AddressManager\AddressManager;
use private\Classes\Common\Decrypt;
use private\Classes\Database\AddressManagement;
use private\Classes\LoginSystem\Validators\AddressValidators\AddressValidator;
use private\Classes\LoginSystem\Validators\NameValidator;
use private\Classes\LoginSystem\Validators\PhoneValidator;

include_once "../AutoLoad/autoLoader.php";

$name = $_POST["name"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$city = $_POST["city"];
$countryId = $_POST["countryId"];
$userId = explode(" ", Decrypt::decrypt($_COOKIE["userId"]))[0];

$addressValidator = new AddressValidator($address, $userId, $countryId, $city);
$nameValidator = new NameValidator($name);
$cityValidator = new NameValidator($city);
$phoneValidator = new PhoneValidator($phone);

$response = array("error" => null, "addressId" => null);

if (!$addressValidator->validate()) {
    $response["error"] = "Address already exist!";
} else if (!$nameValidator->validate() || !$cityValidator->validate()
    || !$phoneValidator->validate()) {
    $response["error"] = "Invalid address!";
} else {
    $addressManager = new AddressManager($userId);
    $addressManager->addAddress($name, $phone, $address, $countryId, $city);
    $response["addressId"] = AddressManagement::getAddressId($userId, $address, $countryId);
}

$json = json_encode($response);

echo $json;
