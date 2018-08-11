<?php

namespace ChangeCase;

class IsCase
{
    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return bool
     */
    public static function lower(string $string, string $locale = null): bool
    {
        return LowerCase::is($string);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return bool
     */
    public static function lowerCase(
        string $string,
        string $locale = null
    ): bool {
        return LowerCase::is($string);
    }

    public static function upper(string $string): bool
    {
        return self::upperCase($string);
    }

    public static function upperCase(string $string): bool
    {
        return UpperCase::is($string);
    }
}
