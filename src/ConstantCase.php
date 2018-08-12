<?php

/**
 * ConstantCase
 */

namespace ChangeCase;

/**
 * ConstantCase
 */
class ConstantCase
{
    /**
     * Constant case a string.
     *
     * @example constant-convert.php
     * @see https://github.com/blakeembrey/constant-case
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
        return UpperCase::convert(
            SnakeCase::convert($string, $locale),
            $locale
        );
    }
}
