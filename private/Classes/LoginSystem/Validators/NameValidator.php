<?php

namespace private\Classes\LoginSystem\Validators;

class NameValidator extends \private\Classes\LoginSystem\Validators\Validator
{
    public function __construct($validate)
    {
        parent::__construct($validate);
    }

    public function validate(): bool
    {
        return parent::isEmpty(parent::getValidate());
    }
}