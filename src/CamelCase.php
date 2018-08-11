<?php

namespace ChangeCase;

class CamelCase
{
    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     * @param bool $mergeNumbers
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
            function (array $matches) use ($locale) {
                return UpperCase::convert($matches[1], $locale);
            },
            $result
        );
    }
}
