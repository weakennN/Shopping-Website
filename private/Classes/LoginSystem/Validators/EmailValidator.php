<?php

namespace private\Classes\LoginSystem\Validators;

abstract class EmailValidator extends Validator
{

    private const EMAIL_REGEX = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";

    public function __construct($validate, $errorMessage)
    {
        parent::__construct($validate, $errorMessage);
    }

    protected function isEmail(): bool
    {
        return preg_match(self::EMAIL_REGEX, parent::getValidate());
    }
}