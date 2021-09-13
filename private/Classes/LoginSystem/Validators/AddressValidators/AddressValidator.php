<?php

namespace private\Classes\LoginSystem\Validators\AddressValidators;

use private\Classes\LoginSystem\Validators\Validator;

class AddressValidator extends Validator
{

    public function __construct($validate, $errorMessage)
    {
        parent::__construct($validate, $errorMessage);
    }

    public function validate(): bool
    {
        if (!parent::isString(parent::getValidate()) || !parent::isEmpty(parent::getValidate())) {
            return false;
        }

        return true;
    }
}