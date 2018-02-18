<?php

namespace ChangeCase;

final class SnakeCase
{
    public static function convert(string $string): string
    {
        return NoCase::convert($string, '_');
    }
}
