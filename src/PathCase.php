<?php

namespace ChangeCase;

final class PathCase
{
    public static function convert(string $string): string
    {
        return NoCase::convert($string, '/');
    }
}
