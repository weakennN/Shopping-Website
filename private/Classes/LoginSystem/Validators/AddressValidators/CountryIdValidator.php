<?php

namespace private\Classes\LoginSystem\Validators\AddressValidators;

use private\Classes\Database\AddressManagement;
use private\Classes\LoginSystem\Validators\Validator;

class CountryIdValidator extends Validator
{

    public function validate(): bool
    {
        if (!AddressManagement::countryIdExist(parent::getValidate())) {
            return false;
        }

        return true;
    }
}