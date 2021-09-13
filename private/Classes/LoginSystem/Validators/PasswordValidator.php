<?php

namespace private\Classes\LoginSystem\Validators;

abstract class PasswordValidator extends \private\Classes\LoginSystem\Validators\Validator
{
    public function __construct($validate, $errorMessage)
    {
        parent::__construct($validate, $errorMessage);
    }

    protected function isValidLength(): bool
    {
        return strlen(parent::getValidate());
    }
}