<?php

namespace private\Classes\LoginSystem\Validators;

abstract class Validator
{
    private string $validate;

    public function __construct($validate)
    {
        $this->validate = $validate;
    }

    public abstract function validate(): bool;

    public function isEmpty($value): bool
    {
        return strlen($value) > 0;
    }

    protected function getValidate(): string
    {
        return $this->validate;
    }
}