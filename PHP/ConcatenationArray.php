<!-- Given an integer array nums of length n, you want to create an array ans of length 2n where ans[i] == nums[i] and ans[i + n] == nums[i] for 0 <= i < n (0-indexed).

Specifically, ans is the concatenation of two nums arrays.

Return the array ans. -->

<?php


function getConcatenation($nums)
{
    $result = $nums;
    for ($i = 0; $i < count($nums); $i++) {
        array_push($result, $nums[$i]);
    }
    echo json_encode($result);
    return $nums;
}


$nums = [1, 2, 1];
getConcatenation($nums);