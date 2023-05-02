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


function getConcatenation1($nums)
{
    arsort($nums);
    print_r($nums);
    return $nums;
}


function getConcatenation2($nums)
{
    $result = $nums;
    array_push($result, 4);
    array_merge_recursive($result, $nums);
    /* array_merge_recursive() mescla os elementos de um ou mais arrays de forma que os elementos de um são colocados no final do array anterior. Retorna o array resultante da fusão.*/
    echo json_encode($result);
    return $nums;
}

$nums = [5 =>1, 2=> 2, "A"=> 1];
getConcatenation1($nums);