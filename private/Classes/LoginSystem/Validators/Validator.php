<?php

namespace private\Classes\LoginSystem\Validators;

abstract class Validator
{
    private string $validate;
    private string $errorMessage;

    public function __construct($validate, $errorMessage)
    {
        $this->validate = $validate;
        $this->setErrorMessage($errorMessage);
    }

    public abstract function validate(): bool;

    public function isEmpty(...$values): bool
    {
        foreach ($values as $value) {
            if (strlen($value) <= 0) {
                return false;
            }
        }

        return true;
    }

    public function containsNumbers($value): bool
    {
        return is_numeric($value);
    }

    public function isString(...$values): bool
    {
        foreach ($values as $value) {
            if (!is_string($value)) {
                return false;
            }
        }

        return true;
    }

    public function getValidate(): string
    {
        return $this->validate;
    }

    protected function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
}