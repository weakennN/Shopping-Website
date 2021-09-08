<?php

namespace private\Classes\LoginSystem\Validators\AddressValidators;

use private\Classes\Database\AddressManagement;
use private\Classes\LoginSystem\Validators\Validator;

class AddressIdValidator extends Validator
{

    private int $userId;

    public function __construct($validate, $userId)
    {
        parent::__construct($validate);
        $this->userId = $userId;
    }

    public function validate(): bool
    {
        if (!AddressManagement::addressIdExist(parent::getValidate(), $this->userId)) {
            return false;
        }

        return true;
    }
}