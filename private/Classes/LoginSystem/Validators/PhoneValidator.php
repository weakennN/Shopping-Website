<?php

namespace private\Classes\LoginSystem\Validators;

class PhoneValidator extends Validator
{

    private const PHONE_REGEX = "/[0-9]+/";

    public function __construct($validate, $errorMessage)
    {
        parent::__construct($validate, $errorMessage);
    }

    public function validate(): bool
    {
        // TODO fix phone regex
        return parent::containsNumbers(parent::getValidate()) && preg_match(self::PHONE_REGEX, parent::getValidate());
    }
}