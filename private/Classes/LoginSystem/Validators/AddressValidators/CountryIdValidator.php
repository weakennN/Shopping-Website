<?php

namespace private\Classes\LoginSystem\Validators\AddressValidators;

use private\Classes\Database\AddressManagement;
use private\Classes\LoginSystem\Validators\Validator;

class CountryIdValidator extends Validator
{

    public function __construct($validate, $errorMessage)
    {
        parent::__construct($validate, $errorMessage);
    }

    public function validate(): bool
    {
        if (!parent::containsNumbers(parent::getValidate())
            || !AddressManagement::countryIdExist(parent::getValidate())) {
            return false;
        }

        return true;
    }
}