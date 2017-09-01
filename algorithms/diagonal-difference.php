<?php
/**
 * Given a square matrix of size N x N, calculate the absolute difference between the sums of its diagonals.
 *
 * Input Format
 *
 * The first line contains a single integer, N. The next N lines denote the matrix's rows, with each line containing
 * space-separated integers describing the columns.
 *
 * Output Format
 *
 * Print the absolute difference between the two sums of the matrix's diagonals as a single integer.
 *
 * Sample Input
 *
 * 3
 * 11 2 4
 * 4 5 6
 * 10 8 -12
 *
 * Sample Output
 *
 * 15
 *
 * Explanation
 *
 * The primary diagonal is:
 *
 * 11
 * 5
 * -12
 *
 * Sum across the primary diagonal: 11 + 5 - 12 = 4
 *
 * The secondary diagonal is:
 *
 * 4
 * 5
 * 10
 *
 * Sum across the secondary diagonal: 4 + 5 + 10 = 19
 * Difference: |4 - 19| = 15
 */

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $n);

$a = [];

for ($ai = 0; $ai < $n; $ai++) {
    $a[]    = explode(" ", fgets($handle));
    array_walk($a[$ai], 'intval');
}

$a1 = $a2 = 0;

for ($i = 0; $i < $n; $i++) {
    $a1 += $a[$i][$i];
    $a2 += $a[$i][$n - 1 - $i];
}

print(abs($a1 - $a2));
