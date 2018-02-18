<?php

namespace ChangeCase;

final class LowerCaseFirst
{
    public static function convert(string $string): string
    {
        return lcfirst($string);
    }
}
