<?php

/**
 * SentenceCase
 */

namespace ChangeCase;

/**
 * SentenceCase
 */
class SentenceCase
{
    /**
     * Sentence case a string.
     *
     * Explicitly adds a single underscore between groups of numbers to maintain
     * readability and reversibility (e.g. `1.20.5` becomes `1_20_5`, not
     * `1205`), by default.
     *
     * @example sentence-convert.php
     * @see https://github.com/blakeembrey/sentence-case

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
        return UpperCaseFirst::convert(
            NoCase::convert($string, $locale),
            $locale
        );
    }
}
