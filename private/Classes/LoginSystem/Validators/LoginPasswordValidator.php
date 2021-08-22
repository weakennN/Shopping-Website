<?php

namespace private\Classes\LoginSystem\Validators;

use private\Classes\Database\UserManagement;

class LoginPasswordValidator extends \private\Classes\LoginSystem\Validators\PasswordValidator
{

    private string $email;

    public function __construct($validate, $email)
    {
        parent::__construct($validate);
        $this->email = $email;
    }

    public function validate(): bool
    {
        if (!$this->isEmpty(parent::getValidate())) {
            return false;
        } else if (!parent::isValidLength()) {
            return false;
        } else if (!password_verify(parent::getValidate(), UserManagement::getUserPassword($this->email))) {
            return false;
        }

        return true;
    }
}