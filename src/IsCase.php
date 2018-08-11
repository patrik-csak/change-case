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

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return bool
     */
    public static function upper(string $string, string $locale = ''): bool
    {
        return self::upperCase($string);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return bool
     */
    public static function upperCase(string $string, string $locale = ''): bool
    {
        return UpperCase::is($string);
    }
}
