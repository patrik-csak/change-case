<?php

/**
 * LowercaseFirst
 */

namespace ChangeCase;

/**
 * LowercaseFirst
 */
class LowerCaseFirst
{
    /**
     * Lower case the first character of a string.
     *
     * @example lower-first-convert.php
     * @see https://github.com/blakeembrey/lower-case-first
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function convert(
        string $string,
        string $locale = null
    ): string {
        if ( ! $string) {
            return '';
        }

        $first = mb_substr($string, 0, 1);
        $rest = mb_substr($string, mb_strlen($first));

        return LowerCase::convert($first, $locale) . $rest;
    }
}
