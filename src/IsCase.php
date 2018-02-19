<?php

namespace ChangeCase;

final class IsCase
{
    public static function lower(string $string): bool
    {
        return self::lowerCase($string);
    }

    public static function lowerCase(string $string): bool
    {
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
