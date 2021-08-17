<?php

function autoLoad($className)
{
    include $_SERVER["HOME"] . "\\" . $className . ".php";
}

spl_autoload_register("autoLoad");
