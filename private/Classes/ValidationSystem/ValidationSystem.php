<?php

namespace private\Classes\ValidationSystem;

class ValidationSystem
{
    private array $validators;
    private array $errorMessages;

    public function __construct(...$validators)
    {
        $this->validators = $validators;
        $this->errorMessages = array();
    }

    public function validate(): bool
    {
        $result = true;
        foreach ($this->validators as $validator) {
            if (!$validator->validate()) {
                array_push($this->errorMessages, $validator->getErrorMessage());
                $result = false;
            }
        }

        return $result;
    }

    public function getErrorMessages(): array
    {
        return $this->errorMessages;
    }
}