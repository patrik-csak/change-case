<?php

/**
 * DotCase
 */

namespace ChangeCase;

/**
 * DotCase
 */
class DotCase
{
    /**
     * Dot case a string.
     *
     * @example dot-convert.php
     * @see https://github.com/blakeembrey/dot-case
     *
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function convert(
        string $string,
        string $locale = null
    ): string {
        return NoCase::convert($string, $locale, '.');
    }
}
