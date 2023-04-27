<!-- Given two strings needle and haystack, return the index of the first occurrence of needle in haystack, or -1 if needle is not part of haystack. -->
<?php

function firstOccurrence($haystack, $needle)
{
    if (is_int(strpos($haystack, $needle))) {
        return strpos($haystack, $needle);
    }
    return -1;
}

$haystack = "sadbutsad";
$needle = "sad";

echo (firstOccurrence($haystack, $needle));