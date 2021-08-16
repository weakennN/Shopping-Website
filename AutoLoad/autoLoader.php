<?php

function autoLoad($className)
{
    $classFolders = array("Classes/Database/", "Classes/", "Classes/Loader/", "Classes/Loader/ProductLoader/"
    , "Classes/Loader/ProductLoader/PImageLoader/", "Classes/Loader/ProductLoader/PDescriptionLoader/"
    , "Classes/Loader/ProductLoader/PDescriptionLoader/PDescriptionSubLoader/");
    for ($i = 0; $i < count($classFolders); $i++) {
        if (file_exists($classFolders[$i] . $className . ".php")) {
            include $classFolders[$i] . $className . ".php";
            break;
        }
    }
}

spl_autoload_register("autoLoad");
