<?php

namespace private\Classes\LoginSystem\Validators;

class NameValidator extends \private\Classes\LoginSystem\Validators\Validator
{
    public function __construct($validate, $errorMessage)
    {
        parent::__construct($validate, $errorMessage);
    }

    public function validate(): bool
    {
        if (!parent::isString()) {
            return false;
        } else if (!parent::isEmpty(parent::getValidate())
            || parent::containsNumbers(parent::getValidate())) {
        return false;
    }

        return true;
    }
}