<?php

function reverseWords($s)
{
    $s = explode(" ", $s);
    $result = [];
    
    foreach($s as $value){
        $value = strrev($value);
        array_push($result, $value);
    }
    return implode(" ",$result);
}

print_r(reverseWords("ola a"));