<?php

namespace ChangeCase;

final class DotCase
{
    public static function convert(string $string): string
    {
        return NoCase::convert($string, '.');
    }
}
