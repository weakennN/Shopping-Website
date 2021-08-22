<?php

namespace private\Classes\LoginSystem;

abstract class Entry
{
    private array $validators;

    public function __construct($validators)
    {
        $this->validators = $validators;
    }

    public abstract function verify(): bool;

    protected function getValidators(): array
    {
        return $this->validators;
    }
}