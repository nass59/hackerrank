<?php
/**
 * Colleen is turning n years old! Therefore, she has s candles of various heights on her cake, and candle i has height
 * heighti. Because the taller candles tower over the shorter ones, Colleen can only blow out the tallest candles.
 *
 * Given the heighti for each individual candle, find and print the number of candles she can successfully blow out.
 *
 * Input Format
 *
 * The first line contains a single integer, n, denoting the number of candles on the cake.
 * The second line contains n space-separated integers, where each integer i describes the height of candle i.
 *
 * Output Format
 *
 * Print the number of candles Colleen blows out on a new line.
 *
 * Sample Input 0
 *
 * 4
 * 3 2 1 3
 *
 * Sample Output 0
 *
 * 2
 *
 * Explanation 0
 *
 * We have one candle of height , one candle of height , and two candles of height . Colleen only blows out the tallest
 * candles, meaning the candles where . Because there are  such candles, we print  on a new line.
 */

$handle = fopen("php://stdin", "r");

function birthdayCakeCandles($ar)
{
    $aggregate = array_count_values($ar);
    rsort($aggregate);

    return $aggregate[0];
}

fscanf($handle, "%i", $n);
$arrayTemp = fgets($handle);
$ar        = array_map('intval', explode(" ", $arrayTemp));
$result    = birthdayCakeCandles($ar);

echo $result . "\n";
