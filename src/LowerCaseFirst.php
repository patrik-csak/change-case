<?php

namespace ChangeCase;

class LowerCaseFirst
{
    public static function convert(
        string $string,
        string $locale = null
    ): string {
        if ( ! $string) {
            return '';
        }

        $first = mb_substr($string, 0, 1);
        $rest = mb_substr($string, mb_strlen($first));

        return LowerCase::convert($first, $locale) . $rest;
    }
}
