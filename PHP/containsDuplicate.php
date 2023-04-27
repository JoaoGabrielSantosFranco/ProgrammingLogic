<!-- Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct. -->
<?php
function containsDuplicate($nums)
{
    $aux = array();
    for ($i = 0; $i < count($nums); $i++) {
        if (in_array($nums[$i], $aux)) {
            return true;
        }
        array_push($aux, $nums[$i]);
    }
    return false;
}
$nums = [1, 1, 1, 3, 3, 4, 3, 2, 4, 2];
echo containsDuplicate($nums);