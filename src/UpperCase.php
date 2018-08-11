<?php

namespace ChangeCase;

class UpperCase
{
    private const LANGUAGES = [
        'az' => [
            'regex' => "/[\u{0069}]/u",
            'map'   => [
                "\u{0069}" => "\u{0130}",
            ],
        ],
        'lt' => [
            'regex' => "/[\u{0069}\u{006A}\u{012F}]\u{0307}|\u{0069}\u{0307}[\u{0300}\u{0301}\u{0303}]/u",
            'map'   => [
                "\u{0069}\u{0307}" => "\u{0049}",
                "\u{006A}\u{0307}" => "\u{004A}",
                "\u{012F}\u{0307}" => "\u{012E}",
                "\u{0069}\u{0307}\u{0300}" => "\u{00CC}",
                "\u{0069}\u{0307}\u{0301}" => "\u{00CD}",
                "\u{0069}\u{0307}\u{0303}" => "\u{0128}",
            ],
        ],
        'tr' => [
            'regex' => "/[\u{0069}]/u",
            'map'   => [
                "\u{0069}" => "\u{0130}",
            ],
        ],
    ];

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

        return mb_strtoupper($string);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return bool
     */
    public static function is(string $string, string $locale = ''): bool
    {
        return self::convert($string, $locale) === $string;
    }
}
