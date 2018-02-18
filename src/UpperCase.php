<?php

namespace ChangeCase;

final class UpperCase
{
    public static function convert(string $string): string
    {
        return mb_strtoupper($string);
    }
}
