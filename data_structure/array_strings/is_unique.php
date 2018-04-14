<?php

declare(strict_types = 1);

/**
 * Implementation of an algorithm to determine if a string has all unique
 * characters.
 * ASCII string
 */

/**
 * Class MapUniquenessDetector
 */
class MapUniquenessDetector
{
    /**
     * @param string $str
     *
     * Time complexity O(n)
     * Space complexity O(1)
     *
     * @return boolean
     */
    public static function isUnique(string $str): bool
    {
        $chars = [];

        for ($i = 0, $length = mb_strlen($str); $i < $length; $i++) {
            $char = $str[$i];
            if (array_key_exists($char, $chars)) {
                return false;
            }

            $chars[$char] = 1;
        }

        return true;
    }
}

/**
 * Class SortingUniquenessDetector
 */
class SortingUniquenessDetector
{
    /**
     * @param string $str
     *
     * @return boolean
     */
    public static function isUnique(string $str): bool
    {
        $chars = str_split($str);
        sort($chars);
        $previousChar = null;

        foreach ($chars as $char) {
            if ($char === $previousChar) {
                return false;
            }

            $previousChar = $char;
        }

        return true;
    }
}

/**
 * Class BuiltInUniquenessDetector
 */
class BuiltInUniquenessDetector
{
    /**
     * @param string $str
     *
     * @return boolean
     */
    public static function isUnique(string $str): bool
    {
        $chars = array_unique(str_split($str));

        return mb_strlen($str) === sizeof($chars);
    }
}

// Tests
MapUniquenessDetector::isUnique('Hello');  // false
MapUniquenessDetector::isUnique('ooooo');  // false
MapUniquenessDetector::isUnique('abcdef'); // true

SortingUniquenessDetector::isUnique('Hello');  // false
SortingUniquenessDetector::isUnique('ooooo');  // false
SortingUniquenessDetector::isUnique('abcdef'); // true

BuiltInUniquenessDetector::isUnique('Hello');  // false
BuiltInUniquenessDetector::isUnique('ooooo');  // false
BuiltInUniquenessDetector::isUnique('abcdef'); // true
