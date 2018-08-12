<?php

/**
 * PascalCase
 */

namespace ChangeCase;

/**
 * PascalCase
 */
class PascalCase
{
    /**
     * Pascal case a string.
     *
     * Explicitly adds a single underscore between groups of numbers to keep
     * readability (e.g. `1.20.5` becomes `1_20_5`, not `1205`).
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
        return UpperCaseFirst::convert(
            CamelCase::convert($string, $locale, $mergeNumbers),
            $locale
        );
    }
}
