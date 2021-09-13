<?php

namespace private\Classes\LoginSystem\Validators\AddressValidators;

use private\Classes\Database\AddressManagement;
use private\Classes\LoginSystem\Validators\Validator;

class AddressIdValidator extends Validator
{

    private int $userId;

    public function __construct($validate, $errorMessage, $userId)
    {
        parent::__construct($validate, $errorMessage);
        $this->userId = $userId;
    }

    public function validate(): bool
    {
        if (!parent::containsNumbers(parent::getValidate())
            || !AddressManagement::addressIdExist(parent::getValidate(), $this->userId)) {
            return false;
        }

        return true;
    }
}