<?php

namespace ChangeCase;

final class LowerCase
{
    public static function convert(string $string): string
    {
        return mb_strtolower($string);
    }
}
