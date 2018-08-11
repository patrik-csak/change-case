<?php

namespace ChangeCase;

class ConstantCase
{
    public static function convert(
        string $string,
        string $locale = null
    ): string {
        return UpperCase::convert(
            SnakeCase::convert($string, $locale),
            $locale
        );
    }
}
