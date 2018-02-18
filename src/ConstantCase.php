<?php

namespace ChangeCase;

final class ConstantCase
{
    public static function convert(string $string): string
    {
        return UpperCase::convert(SnakeCase::convert($string));
    }
}
