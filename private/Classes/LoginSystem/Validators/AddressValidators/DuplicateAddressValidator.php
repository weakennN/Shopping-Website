<?php

namespace private\Classes\LoginSystem\Validators\AddressValidators;

use private\Classes\Database\AddressManagement;

class DuplicateAddressValidator extends \private\Classes\LoginSystem\Validators\Validator
{
    private int $userId;
    private int $countryId;
    private string $city;

    public function __construct($validate, $errorMessage, $userId, $countryId, $city)
    {
        parent::__construct($validate, $errorMessage);
        $this->userId = $userId;
        $this->countryId = $countryId;
        $this->city = $city;
    }

    public function validate(): bool
    {
        if (!parent::isString(parent::getValidate(), $this->city) || !parent::containsNumbers($this->countryId)) {
            return false;
        } else if (!AddressManagement::addressExist($this->userId, parent::getValidate(), $this->countryId, $this->city)) {
            return false;
        }

        return true;
    }
}