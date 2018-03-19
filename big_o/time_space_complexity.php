<?php

// Space complexity -> O(n) time and O(n) space
function sum(int $n)
{
    if ($n <= 0) {
        return 0;
    }

    return $n + sum($n - 1);
}

var_dump(sum(5));

// Space complexity -> O(n) time and O(1) space
function pairSumSequence(int $n)
{
    $sum = 0;

    for ($i = 0; $i < $n; $i++) {
        $sum += pairSum($i, $i + 1);
    }

    return $sum;
}

function pairSum(int $a, int $b)
{
    return $a + $b;
}

var_dump(pairSumSequence(5));
