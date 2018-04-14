<?php

declare(strict_types = 1);

/**
 * Class Urlifier
 */
class Urlifier
{
    /**
     * @param string $str
     *
     * @return string
     */
    public static function urlify(string $str): string
    {
        return str_replace(' ', '%20', trim($str));
    }

    /**
     * @param string $str
     * @param int    $trueLength
     *
     * @return string
     */
    public static function urlifyWithTrueLength(string $str, int $trueLength): string
    {
        return str_replace(' ', '%20', substr($str, 0, $trueLength));
    }
}

Urlifier::urlify('Mr John Smith     '); // "Mr%20John%20Smith"
Urlifier::urlify('    Mr John Smith     '); // "Mr%20John%20Smith"
Urlifier::urlifyWithTrueLength('Mr John Smith     ', 13); // "Mr%20John%20Smith"
Urlifier::urlifyWithTrueLength('     Mr John Smith     ', 18); // "%20%20%20%20%20Mr%20John%20Smith"
