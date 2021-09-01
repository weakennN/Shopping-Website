<?php

namespace private\Classes\Common;

class Encryptor
{
    private static array $encryptingTable = array(
        "a" => "rFu",
        "b" => "QlB",
        "c" => "XB3",
        "d" => "yrf",
        "e" => "myO",
        "f" => "p3p",
        "g" => "FSq",
        "h" => "OAV",
        "i" => "4F1",
        "j" => "Iag",
        "k" => "qcS",
        "l" => "2Sl",
        "m" => "NPh",
        "n" => "S3E",
        "o" => "HkY",
        "p" => "aIx",
        "q" => "bq0",
        "r" => "URp",
        "s" => "1Mv",
        "t" => "zBw",
        "u" => "i4r",
        "v" => "kca",
        "w" => "lY4",
        "x" => "DkA",
        "y" => "zvt",
        "z" => "iUE",
        "A" => "eBj",
        "B" => "Ggs",
        "C" => "JqI",
        "D" => "8Zl",
        "E" => "sjW",
        "F" => "QIh",
        "G" => "bHt",
        "H" => "xPg",
        "I" => "bj4",
        "J" => "pf5",
        "K" => "SYy",
        "L" => "p1Z",
        "M" => "mnM",
        "N" => "c3r",
        "O" => "LWr",
        "P" => "iQu",
        "Q" => "IKK",
        "R" => "0uW",
        "S" => "aNM",
        "T" => "s9o",
        "U" => "15O",
        "V" => "NNo",
        "W" => "R7g",
        "X" => "czp",
        "Y" => "sty",
        "Z" => "ny8",
        "1" => "4rx",
        "2" => "Uqs",
        "3" => "l7E",
        "4" => "3Mm",
        "5" => "qSk",
        "6" => "rO6",
        "7" => "MHI",
        "8" => "3ws",
        "9" => "aE1",
        " " => "dfD"
    );

    public static function encrypt($plainText): string
    {
        $encryptedText = "";

        for ($i = 0; $i < strlen($plainText); $i++) {
            if (array_key_exists($plainText[$i], self::$encryptingTable)) {
                $encryptedText .= self::$encryptingTable[$plainText[$i]];
            } else {
                $encryptedText .= $plainText[$i];
            }
        }

        return $encryptedText;
    }
}