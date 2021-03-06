<?php

namespace private\Classes\LoginSystem\Validators;

use private\Classes\Database\UserManagement;

class RegisterEmailValidator extends \private\Classes\LoginSystem\Validators\EmailValidator
{
    public function __construct($validate, $errorMessage)
    {
        parent::__construct($validate, $errorMessage);
    }

    public function validate(): bool
    {

        if (!parent::isEmpty(parent::getValidate())) {
            return false;
        } else if (!parent::isEmail()) {
            return false;
        } else if (UserManagement::isEmailTaken(parent::getValidate())) {
            return false;
        }

        return true;
    }
}