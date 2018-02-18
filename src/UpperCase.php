<?php

namespace ChangeCase;

final class UpperCase
{
    public static function convert(string $string): string
    {
        return mb_strtoupper($string);
    }

    public static function is(string $string): bool
    {
        return self::convert($string) === $string;
    }
}
