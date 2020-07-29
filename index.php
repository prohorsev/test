<?php

function encrypt($text, $n)
{
    $arr = str_split($text);
    $arrSecond = [];
    $arrFirst = [];
    foreach ($arr as $key => $value) {
        if (($key % 2) == 0) {
            array_push($arrFirst, $value);
        } else {
            array_push($arrSecond, $value);
        }
    }
    return implode($arrSecond) . implode($arrFirst);
}
echo encrypt("This is a test!", 1);
