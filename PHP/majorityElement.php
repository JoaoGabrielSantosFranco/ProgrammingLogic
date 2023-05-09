<?php

// Given an array nums of size n, return the majority element.

// The majority element is the element that appears more than ⌊n / 2⌋ times. You may assume that the majority element always exists in the array.


function majorityElement($nums)
{
    $arrayData = array_count_values($nums);
    $highestValue = null;
    $highestKey = null;

    foreach ($arrayData as $key => $value) {
        if ($value > $highestValue) {
            $highestValue = $value;
            $highestKey = $key;
        }
    }
    return $highestKey;
}

$nums = [6, 5, 5, 8, 9, 9, 9, 9, 1, 1, 1, 1, 1, 1, 1];
majorityElement($nums);

