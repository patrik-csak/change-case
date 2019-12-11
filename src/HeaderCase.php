<?php

/**
 * HeaderCase
 */

namespace ChangeCase;

/**
 * HeaderCase
 */
class HeaderCase
{
    /**
     * Header case a string.
     *
     * @example header-convert.php
     * @see https://github.com/blakeembrey/header-case
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
        return preg_replace_callback(
            '/^.|-./u',
            static function (array $matches) use ($locale) {
                return UpperCase::convert($matches[0], $locale);
            },
            NoCase::convert($string, $locale, '-')
        );
    }
}
