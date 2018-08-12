<?php

/**
 * SwapCase
 */

namespace ChangeCase;

/**
 * SwapCase
 */
class SwapCase
{
    /**
     * Swap the case of a string.
     *
     * @example swap-convert.php
     * @see https://github.com/blakeembrey/swap-case
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
        $result = '';

        for ($i = 0, $n = mb_strlen($string); $i < $n; $i++) {
            $char = mb_substr($string, $i, 1);

            $result .= UpperCase::is($char)
                ? LowerCase::convert($char, $locale)
                : UpperCase::convert($char, $locale);
        }

        return $result;
    }
}
