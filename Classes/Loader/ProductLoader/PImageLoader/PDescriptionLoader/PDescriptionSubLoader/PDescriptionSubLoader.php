<?php

abstract class PDescriptionSubLoader
{
    public abstract function match($value);

    public abstract function load($value);
}