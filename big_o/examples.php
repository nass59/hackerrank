<?php

// Example 1 -> O(N)
function foo(array $array = [])
{
    $sum     = 0;
    $product = 1;

    for ($i = 0; $i < sizeof($array); $i++) {
        $sum += $array[$i];
    }

    for ($i = 0; $i < sizeof($array); $i++) {
        $product *= $array[$i];
    }

    var_dump($sum . ', ' . $product);
}

var_dump('Example 1');
var_dump('==========');
foo([1, 2, 4, 5, 8]);

// Example 2 -> O(N^2)
function printPairs(array $array = [])
{
    for ($i = 0; $i < sizeof($array); $i++) {
        for ($j = 0; $j < sizeof($array); $j++) {
            var_dump($array[$i] . ', ' . $array[$j]);
        }
    }
}

var_dump('Example 2');
var_dump('==========');
printPairs([1, 2, 4, 5, 8]);

// Example 2 -> O(N^2)
function printUnorderedPairs(array $array = [])
{
    for ($i = 0; $i < sizeof($array); $i++) {
        for ($j = $i + 1; $j < sizeof($array); $j++) {
            var_dump($array[$i] . ', ' . $array[$j]);
        }
    }
}

var_dump('Example 2');
var_dump('==========');
printUnorderedPairs([1, 2, 4, 5, 8]);

// Example 3 -> O(ab)
function printUnorderedMultiplePairs(array $arrayA = [], array $arrayB = [])
{
    for ($i = 0; $i < sizeof($arrayA); $i++) {
        for ($j = 0; $j < sizeof($arrayB); $j++) {
            // If => 0(1)
            if ($arrayA[$i] < $arrayB[$j]) {
                var_dump($arrayA[$i] . ', ' . $arrayB[$j]);
            }
        }
    }
}

var_dump('Example 3');
var_dump('==========');
printUnorderedMultiplePairs([1, 2, 4, 5, 8], [3, 5, 8, 9, 1]);

// Example 4 -> O(ab)
function printUnorderedMultiplePairsConstant(array $arrayA = [], array $arrayB = [])
{
    for ($i = 0; $i < sizeof($arrayA); $i++) {
        for ($j = 0; $j < sizeof($arrayB); $j++) {
            for ($k = 0; $k < 10; $k++) {
                var_dump($arrayA[$i] . ', ' . $arrayB[$j]);
            }
        }
    }
}

var_dump('Example 4');
var_dump('==========');
printUnorderedMultiplePairsConstant([1, 2, 4, 5, 8], [3, 5, 8, 9, 1]);

// Example 5 -> O(N)
function reverse(array $array = [])
{
    for ($i = 0; $i < sizeof($array) / 2; $i++) {
        $other         = sizeof($array) - $i - 1;
        $temp          = $array[$i];
        $array[$i]     = $array[$other];
        $array[$other] = $temp;
    }

    var_dump($array);
}

var_dump('Example 5');
var_dump('==========');
reverse([1, 2, 4, 5, 8]);

// Example 6 -> O(sqrt(N))
function isPrime(int $n)
{
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }

    return true;
}

var_dump('Example 6');
var_dump('==========');
var_dump(isPrime(29));

// Example 7 -> O(N)
function factorial(int $n)
{
    if ($n < 0) {
        return -1;
    }

    if ($n === 0) {
        return 1;
    }

    return $n * factorial($n -1);
}

var_dump('Example 7');
var_dump('==========');
var_dump(factorial(4));