<?php
/**
 * Sample Input
 *
 * 07:05:45PM
 *
 * Sample Output
 *
 * 19:05:45
 */

$handle = fopen("php://stdin", "r");
fscanf($handle, "%s", $time);

print((new \Datetime($time))->format('H:i:s'));
