<?php

namespace private\Classes\LoginSystem\Validators;

use private\Classes\Database\UserManagement;

class LoginEmailValidator extends EmailValidator
{
    public function __construct($validate, $errorMessage)
    {
        parent::__construct($validate, $errorMessage);
    }

    public function validate(): bool
    {
        if (!parent::isString(parent::getValidate())
            || !parent::isEmpty(parent::getValidate())) {
            return false;
        } else if (!parent::isEmail()) {
            return false;
        } else if (!UserManagement::isEmailTaken(parent::getValidate())) {
            return false;
        }

        return true;
    }
}