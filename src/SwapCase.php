<?php

namespace ChangeCase;

class SwapCase
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
        $result = '';

        for ($i = 0, $n = mb_strlen($string); $i < $n; $i++) {
            $char = mb_substr($string, $i, 1);

            $result .= IsCase::upper($char)
                ? LowerCase::convert($char, $locale)
                : UpperCase::convert($char, $locale);
        }

        return $result;
    }
}
