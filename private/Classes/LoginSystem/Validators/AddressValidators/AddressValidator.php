<?php

namespace private\Classes\LoginSystem\Validators\AddressValidators;

use private\Classes\Database\AddressManagement;

class AddressValidator extends \private\Classes\LoginSystem\Validators\Validator
{
    private int $userId;
    private int $countryId;
    private string $city;

    public function __construct($validate, $userId, $countryId, $city)
    {
        parent::__construct($validate);
        $this->userId = $userId;
        $this->countryId = $countryId;
        $this->city = $city;
    }

    public function validate(): bool
    {
        if (!AddressManagement::addressExist($this->userId, parent::getValidate(), $this->countryId, $this->city)) {
            return false;
        }

        return true;
    }
}