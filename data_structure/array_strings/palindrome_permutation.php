<?php

declare(strict_types = 1);

/**
 * Class PalindromePermutationChecker
 */
class PalindromePermutationChecker
{
    /**
     * @param string $str
     *
     * To be a permutation of a palindrome, a string can have no more
     * than one character that is odd.
     *
     * @return bool
     */
    public static function isPalindromePermutation(string $str): bool
    {
        $chars = [];

        for ($i = 0, $length = mb_strlen($str); $i < $length; $i++) {
            $char = mb_strtolower($str[$i]);

            if ($char === ' ') {
                continue;
            }

            $letters[$char] = array_key_exists($char, $chars) ? $chars[$char] + 1 : 1;
        }

        $oddCount = 0;
        foreach ($chars as $char => $count) {
            if ($count % 2 !== 0 && ++$oddCount > 1) {
                return false;
            }
        }

        return true;
    }
}

PalindromePermutationChecker::isPalindromePermutation('Tact coa'); // true -> t: 2, a: 2, c: 2, o: 1
PalindromePermutationChecker::isPalindromePermutation('coca cola'); // false -> c: 3, l: 1
