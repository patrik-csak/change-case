<?php

/**
 * CamelCase
 */

namespace ChangeCase;

/**
 * CamelCase
 */
class CamelCase
{
    /**
     * Camel case a string.
     *
     * Explicitly adds a single underscore between groups
     * of numbers to maintain readability and reversibility (e.g. `1.20.5`
     * becomes `1_20_5`, not `1205`), by default.
     *
     * @example camel-convert.php
     * @see https://github.com/blakeembrey/camel-case
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     * @param bool $mergeNumbers If `true`, there will be no character between
     *                           numbers. If `false`, there will be a `_`
     *                           between numbers.
     *
     * @return string
     */
    public static function convert(
        string $string,
        string $locale = null,
        bool $mergeNumbers = false
    ): string {
        $result = NoCase::convert($string, $locale);

        if ( ! $mergeNumbers) {
            $result = preg_replace('/ (?=\d)/', '_', $result);
        }

        return preg_replace_callback(
            '/ (.)/u',
            static function (array $matches) use ($locale) {
                return UpperCase::convert($matches[1], $locale);
            },
            $result
        );
    }
}
