<?php


use private\Classes\Common\Decrypt;
use private\Classes\Common\Encryptor;

include_once "../AutoLoad/autoLoader.php";

$text = "16 wnp3WxKt";
$encryptedText = Encryptor::encrypt($text);

$decryptedText = Decrypt::decrypt($encryptedText);

echo $encryptedText;
echo "<br>";
echo $decryptedText;
