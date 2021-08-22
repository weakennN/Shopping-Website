<?php

namespace private\Classes\LoginSystem\Validators;

class LoginEmailValidator extends \private\Classes\LoginSystem\Validators\EmailValidator
{
    public function __construct($validate)
    {
        parent::__construct($validate);
    }

    public function validate(): bool
    {
        if (!parent::isEmpty(parent::getValidate())) {
            return false;
        } else if (!parent::isEmail()) {
            return false;
        } else if (!\private\Classes\Database\UserManagement::isEmailTaken(parent::getValidate())) {
            return false;
        }

        return true;
    }
}