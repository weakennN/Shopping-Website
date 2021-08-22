<?php

namespace private\Classes\LoginSystem\Validators;

class RegisterPasswordValidator extends \private\Classes\LoginSystem\Validators\PasswordValidator
{
    public function __construct($validate)
    {
        parent::__construct($validate);
    }

    public function validate(): bool
    {
        if (!parent::isEmpty(parent::getValidate())) {
            return false;
        } else if (!parent::isValidLength()) {
            return false;
        }

        return true;
    }
}