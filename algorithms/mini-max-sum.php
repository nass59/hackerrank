<?php
/**
 * Given five positive integers, find the minimum and maximum values that can be calculated by summing exactly four of
 * the five integers. Then print the respective minimum and maximum values as a single line of two space-separated
 * long integers.
 *
 * Input Format
 *
 * A single line of five space-separated integers.
 *
 * Constraints
 *
 * Each integer is in the inclusive range [1, 10]9.
 *
 * Output Format
 *
 * Print two space-separated long integers denoting the respective minimum and maximum values that can be calculated by
 * summing exactly four of the five integers. (The output can be greater than 32 bit integer.)
 *
 * Sample Input
 *
 * 1 2 3 4 5
 *
 * Sample Output
 *
 * 10 14
 *
 * Explanation
 *
 * Hints: Beware of integer overflow! Use 64-bit Integer.
 */

$handle      = fopen("php://stdin", "r");
$arrayTemp   = fgets($handle);
$arr         = array_map('intval', explode(" ", $arrayTemp));

asort($arr);

$min = array_slice($arr, 0, (sizeof($arr) -1));
$max = array_slice($arr, 1);

print(array_sum($min) . ' ' . array_sum($max));
