<?php

namespace ChangeCase;

final class ParamCase
{
    public static function convert(string $string): string
    {
        return NoCase::convert($string, '-');
    }
}
