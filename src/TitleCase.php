<?php

/**
 * TitleCase
 */
namespace ChangeCase;

/**
 * TitleCase
 */
class TitleCase
{
    /**
     * Title case a string.
     *
     * @example title-convert.php
     * @see https://github.com/blakeembrey/title-case
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
            '/^.| ./u',
            static function (array $matches) use ($locale) {
                return UpperCase::convert($matches[0], $locale);
            },
            NoCase::convert($string, $locale)
        );
    }
}
