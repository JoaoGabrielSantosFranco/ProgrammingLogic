<?php

function generate($numRows)
{
    $pascal = [[1]];

    for ($i = 1; $i < $numRows; $i++) {
        $row = [1];
        for ($j = 1; $j < $i; $j++) {
            $row[] = $pascal[$i - 1][$j - 1] + $pascal[$i - 1][$j];
        }
        $row[] = 1;
        $pascal[] = $row;
    }
    return $pascal;
}

$numRows = 5;
print_r((generate(($numRows))));
