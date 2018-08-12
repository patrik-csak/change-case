<?php

/**
 * LowerCase
 */

namespace ChangeCase;

/**
 * LowerCase
 */
class LowerCase
{
    const LANGUAGES = [
        'az' => [
            'regex' => "/[\u{0130}]/u",
            'map'    => [
                "\u{0130}"         => "\u{0069}",
                "\u{0049}"         => "\u{0131}",
                "\u{0049}\u{0307}" => "\u{0069}",
            ],
        ],
        'lt' => [
            'regex' => "/[\u{0049}\u{004A}\u{012E}\u{00CC}\u{00CD}\u{0128}]/u",
            'map'    => [
                "\u{0049}" => "\u{0069}\u{0307}",
                "\u{004A}" => "\u{006A}\u{0307}",
                "\u{012E}" => "\u{012F}\u{0307}",
                "\u{00CC}" => "\u{0069}\u{0307}\u{0300}",
                "\u{00CD}" => "\u{0069}\u{0307}\u{0301}",
                "\u{0128}" => "\u{0069}\u{0307}\u{0303}",
            ],
        ],
        'tr' => [
            'regex' => "/\u{0130}|\u{0049}|\u{0049}\u{0307}/u",
            'map'    => [
                "\u{0130}"         => "\u{0069}",
                "\u{0049}"         => "\u{0131}",
                "\u{0049}\u{0307}" => "\u{0069}",
            ],
        ],
    ];

    /**
     * Lower case a string.
     *
     * @example lower-convert.php
     * @see https://github.com/blakeembrey/lower-case
     *
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
        $language = null;

        if ($locale) {
            $language = self::LANGUAGES[$locale] ?? null;
        }

        if ($language) {
            $string = preg_replace_callback(
                $language['regex'],
                function (array $matches) use ($language) {
                    return $language['map'][$matches[0]];
                },
                $string
            );
        }

        return mb_strtolower($string);
    }


    /**
     * Check if a string is lower case.
     *
     * @example lower-is.php
     * @see https://github.com/blakeembrey/is-lower-case
     *
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return bool
     */
    public static function is(string $string, string $locale = null): bool
    {
        return self::convert($string, $locale) === $string;
    }
}
