<?php

namespace ChangeCase;

class SentenceCase
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
        return UpperCaseFirst::convert(
            NoCase::convert($string, $locale),
            $locale
        );
    }
}
