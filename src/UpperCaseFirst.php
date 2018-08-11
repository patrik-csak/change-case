<?php

namespace ChangeCase;

class UpperCaseFirst
{
    /**
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
        if ( ! $string) {
            return '';
        }

        $first = mb_substr($string, 0, 1);
        $rest = mb_substr($string, mb_strlen($first));

        return UpperCase::convert($first, $locale) . $rest;
    }
}
