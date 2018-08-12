<?php

/**
 * ParamCase
 */

namespace ChangeCase;

/**
 * ParamCase
 */
class ParamCase
{
    /**
     * Param case a string.
     *
     * @example param-convert.php
     * @see https://github.com/blakeembrey/param-case
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
        return NoCase::convert($string, $locale, '-');
    }
}
