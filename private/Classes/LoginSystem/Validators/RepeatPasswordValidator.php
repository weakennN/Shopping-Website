<?php

namespace private\Classes\LoginSystem\Validators;

class RepeatPasswordValidator extends \private\Classes\LoginSystem\Validators\Validator
{
    private string $repeatPassword;

    public function __construct($validate, $repeatPassword)
    {
        parent::__construct($validate);
        $this->repeatPassword = $repeatPassword;
    }

    public function validate(): bool
    {
        if (!parent::isEmpty(parent::getValidate()) || !parent::isEmpty($this->repeatPassword)) {
            return false;
        } else if (strcmp(parent::getValidate(), $this->repeatPassword) != 0) {
            return false;
        }

        return true;
    }
}