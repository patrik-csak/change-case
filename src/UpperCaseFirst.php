<?php

namespace ChangeCase;

final class UpperCaseFirst
{
    public static function convert(string $string): string
    {
        return ucfirst($string);
    }
}
