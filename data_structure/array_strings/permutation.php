<?php

declare(strict_types = 1);

/**
 * Class permutation
 */
class PermutationSort
{
    /**
     * @param string $str1
     * @param string $str2
     *
     * @return bool
     */
    public static function permutation(string $str1, string  $str2): bool
    {
        if (mb_strlen($str1) !== mb_strlen($str2)) {
            return false;
        }

        $strA = str_split($str1);
        $strB = str_split($str2);

        sort($strA);
        sort($strB);

        return implode('', $strA) === implode('', $strB) ? true : false;
    }
}

/**
 * Class PermutationHashMap
 */
class PermutationHashMap
{
    /**
     * @param string $str1
     * @param string $str2
     *
     * @return bool
     */
    public static function permutation(string $str1, string  $str2): bool
    {
        if (mb_strlen($str1) !== mb_strlen($str2)) {
            return false;
        }

        $letters1 = [];
        $letters2 = [];

        for ($i = 0, $length = mb_strlen($str1); $i < $length; $i++) {
            $char1 = $str1[$i];
            $char2 = $str2[$i];
            $letters1[$char1] = array_key_exists($char1, $letters1) ? $letters1[$char1] + 1 : 1;
            $letters2[$char2] = array_key_exists($char2, $letters2) ? $letters2[$char2] + 1 : 1;
        }

        ksort($letters1);
        ksort($letters2);

        return $letters1 === $letters2;
    }
}

PermutationSort::permutation('hello', 'xwfgy'); // false
PermutationSort::permutation('hello', 'world'); // false
PermutationSort::permutation('hello', 'olleh'); // true

PermutationHashMap::permutation('hello', 'xwfgy'); // false
PermutationHashMap::permutation('hello', 'world'); // false
PermutationHashMap::permutation('hello', 'olleh'); // true
