<?php

namespace private\Classes\Common;

class Decrypt
{
    private static array $decryptingTable = array(
        "rFu" => "a",
        "QlB" => "b",
        "XB3" => "c",
        "yrf" => "d",
        "myO" => "e",
        "p3p" => "f",
        "FSq" => "g",
        "OAV" => "h",
        "4F1" => "i",
        "Iag" => "j",
        "qcS" => "k",
        "2Sl" => "l",
        "NPh" => "m",
        "S3E" => "n",
        "HkY" => "o",
        "aIx" => "p",
        "bq0" => "q",
        "URp" => "r",
        "1Mv" => "s",
        "zBw" => "t",
        "i4r" => "u",
        "kca" => "v",
        "lY4" => "w",
        "DkA" => "x",
        "zvt" => "y",
        "iUE" => "z",
        "eBj" => "A",
        "Ggs" => "B",
        "JqI" => "C",
        "8Zl" => "D",
        "sjW" => "E",
        "QIh" => "F",
        "bHt" => "G",
        "xPg" => "H",
        "bj4" => "I",
        "pf5" => "J",
        "SYy" => "K",
        "p1Z" => "L",
        "mnM" => "M",
        "c3r" => "N",
        "LWr" => "O",
        "iQu" => "P",
        "IKK" => "Q",
        "0uW" => "R",
        "aNM" => "S",
        "s9o" => "T",
        "15O" => "U",
        "NNo" => "V",
        "R7g" => "W",
        "czp" => "X",
        "sty" => "Y",
        "ny8" => "Z",
        "4rx" => "1",
        "Uqs" => "2",
        "l7E" => "3",
        "3Mm" => "4",
        "qSk" => "5",
        "rO6" => "6",
        "MHI" => "7",
        "3ws" => "8",
        "aE1" => "9",
        "dfD" => " "
    );

    public static function decrypt($encryptedText): string
    {
        $decryptedText = "";

        for ($i = 0; $i < strlen($encryptedText); $i += 3) {
            $decryptKey = substr($encryptedText, $i, 3);
            if (array_key_exists($decryptKey, self::$decryptingTable)) {
                $decryptedText .= self::$decryptingTable[$decryptKey];
            } else {
                $decryptedText .= $decryptKey;
            }
        }

        return $decryptedText;
    }
}