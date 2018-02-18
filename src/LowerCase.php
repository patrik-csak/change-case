<?php

namespace ChangeCase;

final class LowerCase
{
    public static function convert(string $string): string
    {
        return mb_strtolower($string);
    }

    public static function is(string $string): bool
    {
       return self::convert($string) === $string;
    }
}
