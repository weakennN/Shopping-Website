<?php

namespace private\Classes\LoginSystem\Validators;

abstract class PasswordValidator extends \private\Classes\LoginSystem\Validators\Validator
{
    public function __construct($validate)
    {
        parent::__construct($validate);
    }

    protected function isValidLength(): bool
    {
        return strlen(parent::getValidate());
    }
}