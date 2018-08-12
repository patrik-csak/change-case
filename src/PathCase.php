<?php

/**
 * PathCase
 */

namespace ChangeCase;

/**
 * PathCase
 */
class PathCase
{
    /**
     * Path case a string.
     *
     * @example path-convert.php
     * @see https://github.com/blakeembrey/path-case
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
        return NoCase::convert($string, $locale, '/');
    }
}
