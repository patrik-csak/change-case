<?php

namespace ChangeCase;

class TitleCase
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
        return preg_replace_callback(
            '/^.| ./u',
            function (array $matches) use ($locale) {
                return UpperCase::convert($matches[0], $locale);
            },
            NoCase::convert($string, $locale)
        );
    }
}
