<?php

/**
 * SnakeCase
 */

namespace ChangeCase;

/**
 * SnakeCase
 */
class SnakeCase
{
    /**
     * Snake case a string.
     *
     * @example snake-convert.php
     * @see https://github.com/blakeembrey/snake-case
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
        return NoCase::convert($string, $locale, '_');
    }
}
