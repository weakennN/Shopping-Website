<?php

namespace private\Classes\LoginSystem\Validators;

use private\Classes\LoginSystem\Validators\Validator;

class PhoneValidator extends Validator
{

    private const PHONE_REGEX = "/[0-9]+/";

    public function validate(): bool
    {
        return preg_match(self::PHONE_REGEX, parent::getValidate());
    }
}