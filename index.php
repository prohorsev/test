<?php
function reverseWords($str) {
    $valueOld = '';
    $doubleSpaces = false;
    foreach (str_split($str) as $key => $value){
        if ($value === $valueOld && $value === ' '){
            $doubleSpaces = true;
        }
    }
    $token = ' ';
    if (substr_count($str, ' ') === 2) {
        $token = '  ';
    }
    $tok = strtok ($str , $token);
    $strNew = '';
    while ($tok !== false) {
        $strNew = $strNew . strrev($tok) . $token;
        $tok = strtok($token);
    }
    if (substr_count($str, ' ') === 2){
        return str_replace(' ', ' ' . '&nbsp;',  mb_substr($strNew, 0, -1));
    }else{
        return mb_substr($strNew, 0, -1);
    }
}
echo reverseWords("double  spaced  words");